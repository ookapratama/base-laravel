<?php

namespace App\Traits;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

/**
 * Trait LogsActivity
 * 
 * Gunakan trait ini di Model untuk otomatis mencatat aktivitas CRUD.
 * 
 * Contoh penggunaan:
 * ```php
 * class User extends Authenticatable
 * {
 *     use LogsActivity;
 *     
 *     // Opsional: custom attributes yang di-log
 *     protected static array $logAttributes = ['name', 'email', 'role_id'];
 *     
 *     // Opsional: attributes yang di-ignore
 *     protected static array $logExcept = ['password', 'remember_token'];
 * }
 * ```
 */
trait LogsActivity
{
    /**
     * Boot trait dan daftarkan event listeners
     */
    public static function bootLogsActivity(): void
    {
        // Log saat model dibuat
        static::created(function (Model $model) {
            static::logActivity('created', $model);
        });

        // Log saat model diupdate
        static::updated(function (Model $model) {
            static::logActivity('updated', $model);
        });

        // Log saat model dihapus
        static::deleted(function (Model $model) {
            static::logActivity('deleted', $model);
        });
    }

    /**
     * Log aktivitas ke database
     */
    protected static function logActivity(string $action, Model $model): void
    {
        $oldValues = null;
        $newValues = null;

        // Ambil attributes yang perlu di-log
        $logAttributes = static::getLogAttributes();
        $logExcept = static::getLogExceptAttributes();

        if ($action === 'created') {
            $newValues = static::filterAttributes($model->getAttributes(), $logAttributes, $logExcept);
        } elseif ($action === 'updated') {
            // Kita gunakan $model->getOriginal() vs $model->getAttributes() atau $model->getChanges()
            // getChanges() hanya tersedia SETELAH save. 
            // Namun di event updated, changes sudah tersedia.
            $changes = $model->getChanges();
            
            // Jika tidak ada perubahan yang perlu di-log, skip
            $loggedChanges = static::filterAttributes($changes, $logAttributes, $logExcept);
            if (empty($loggedChanges)) {
                return;
            }

            $newValues = $loggedChanges;
            $oldValues = static::filterAttributes($model->getOriginal(), array_keys($loggedChanges), $logExcept);
        } elseif ($action === 'deleted') {
            $oldValues = static::filterAttributes($model->getOriginal(), $logAttributes, $logExcept);
        }

        // Gunakan service untuk mencatat log
        app(\App\Services\ActivityLogService::class)->log(
            action: $action,
            description: static::getLogDescription($action, $model),
            subject: $model,
            oldValues: $oldValues,
            newValues: $newValues
        );
    }

    /**
     * Get attributes yang perlu di-log
     */
    protected static function getLogAttributes(): ?array
    {
        return property_exists(static::class, 'logAttributes') 
            ? static::$logAttributes 
            : null; // null = semua attributes
    }

    /**
     * Get attributes yang di-ignore
     */
    protected static function getLogExceptAttributes(): array
    {
        $defaults = ['password', 'remember_token', 'updated_at', 'created_at'];
        
        if (property_exists(static::class, 'logExcept')) {
            return array_merge($defaults, static::$logExcept);
        }
        
        return $defaults;
    }

    /**
     * Filter attributes berdasarkan whitelist dan blacklist
     */
    protected static function filterAttributes(array $attributes, ?array $only, array $except): array
    {
        // Filter blacklist
        $filtered = array_diff_key($attributes, array_flip($except));

        // Filter whitelist jika ada
        if ($only !== null) {
            $filtered = array_intersect_key($filtered, array_flip($only));
        }

        return $filtered;
    }

    /**
     * Generate deskripsi log
     * Override method ini untuk custom description
     */
    protected static function getLogDescription(string $action, Model $model): string
    {
        $modelName = class_basename($model);
        $identifier = $model->getAttribute('name') 
            ?? $model->getAttribute('title') 
            ?? $model->getKey();

        return match ($action) {
            'created' => "{$modelName} '{$identifier}' telah dibuat",
            'updated' => "{$modelName} '{$identifier}' telah diperbarui",
            'deleted' => "{$modelName} '{$identifier}' telah dihapus",
            default => "{$modelName} '{$identifier}' - {$action}",
        };
    }

    /**
     * Log custom activity (untuk aksi non-CRUD)
     * 
     * @param string $action Nama aksi (login, exported, etc.)
     * @param string|null $description Deskripsi custom
     * @param array|null $properties Data tambahan
     */
    public function logCustomActivity(string $action, ?string $description = null, ?array $properties = null): ActivityLog
    {
        return ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'description' => $description,
            'subject_type' => get_class($this),
            'subject_id' => $this->getKey(),
            'properties' => $properties,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
        ]);
    }
}
