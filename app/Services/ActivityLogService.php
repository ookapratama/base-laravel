<?php

namespace App\Services;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ActivityLogService
{
    /**
     * Log aktivitas manual (untuk aksi yang tidak ter-cover trait)
     * 
     * @param string $action Nama aksi
     * @param string|null $description Deskripsi
     * @param Model|null $subject Model yang terkait (opsional)
     * @param array|null $properties Data tambahan
     */
    public function log(
        string $action,
        ?string $description = null,
        ?Model $subject = null,
        ?array $properties = null,
        ?array $oldValues = null,
        ?array $newValues = null
    ): ActivityLog {
        // Deteksi impersonasi
        if (session()->has('impersonate_admin_id')) {
            $properties = array_merge($properties ?? [], [
                'impersonated_by' => session()->get('impersonate_admin_id'),
                'is_impersonation' => true
            ]);
        }

        return ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'description' => $description,
            'subject_type' => $subject ? get_class($subject) : null,
            'subject_id' => $subject?->getKey(),
            'old_values' => $oldValues,
            'new_values' => $newValues,
            'properties' => $properties,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
        ]);
    }

    /**
     * Log aktivitas login
     */
    public function logLogin(): ActivityLog
    {
        $user = Auth::user();
        return $this->log(
            'login',
            "User '{$user->name}' berhasil login",
            $user
        );
    }

    /**
     * Log aktivitas logout
     */
    public function logLogout(): ActivityLog
    {
        $user = Auth::user();
        return $this->log(
            'logout',
            "User '{$user->name}' logout",
            $user
        );
    }

    /**
     * Ambil semua log dengan pagination
     */
    public function getPaginated(int $perPage = 15, array $filters = []): LengthAwarePaginator
    {
        $query = ActivityLog::with('user')
            ->latest();

        // Filter by action
        if (!empty($filters['action'])) {
            $query->where('action', $filters['action']);
        }

        // Filter by user
        if (!empty($filters['user_id'])) {
            $query->where('user_id', $filters['user_id']);
        }

        // Filter by subject type (model class)
        if (!empty($filters['subject_type'])) {
            $query->where('subject_type', $filters['subject_type']);
        }

        // Filter by date range
        // Filter by date range
        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
            $query->whereBetween('created_at', [
                $filters['start_date'] . ' 00:00:00',
                $filters['end_date'] . ' 23:59:59'
            ]);
        }

        // Search in description
        if (!empty($filters['search'])) {
            $query->where('description', 'like', "%{$filters['search']}%");
        }

        return $query->paginate($perPage);
    }

    /**
     * Ambil log untuk user tertentu
     */
    public function getByUser(int $userId, int $limit = 10)
    {
        return ActivityLog::where('user_id', $userId)
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Ambil log untuk model tertentu
     */
    public function getBySubject(Model $model, int $limit = 10)
    {
        return ActivityLog::where('subject_type', get_class($model))
            ->where('subject_id', $model->getKey())
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Get available actions for filter dropdown
     */
    public function getAvailableActions(): array
    {
        return ActivityLog::select('action')
            ->distinct()
            ->pluck('action')
            ->toArray();
    }

    /**
     * Get activity statistics
     */
    public function getStatistics(int $days = 30): array
    {
        $startDate = now()->subDays($days);

        return [
            'total' => ActivityLog::where('created_at', '>=', $startDate)->count(),
            'by_action' => ActivityLog::where('created_at', '>=', $startDate)
                ->selectRaw('action, COUNT(*) as count')
                ->groupBy('action')
                ->pluck('count', 'action')
                ->toArray(),
            'by_user' => ActivityLog::where('created_at', '>=', $startDate)
                ->whereNotNull('user_id')
                ->selectRaw('user_id, COUNT(*) as count')
                ->groupBy('user_id')
                ->with('user:id,name')
                ->limit(10)
                ->get()
                ->map(fn($log) => [
                    'user' => $log->user?->name ?? 'Unknown',
                    'count' => $log->count
                ]),
        ];
    }

    /**
     * Cleanup old logs
     */
    public function cleanup(int $daysToKeep = 90): int
    {
        return ActivityLog::where('created_at', '<', now()->subDays($daysToKeep))
            ->delete();
    }
}
