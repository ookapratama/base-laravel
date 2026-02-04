<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Process;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SystemController extends Controller
{
    /**
     * Display system health dashboard
     */
    public function health()
    {
        $health = [
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version(),
            'os' => PHP_OS,
            'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
            'memory_usage' => $this->formatBytes(memory_get_usage(true)),
            'disk' => $this->diskInfo(),
            'db_connection' => $this->checkDbConnection(),
            'uptime' => $this->getServerUptime(),
        ];

        return view('pages.system.health', compact('health'));
    }

    /**
     * Get disk usage information
     */
    private function diskInfo()
    {
        $path = base_path();
        $total = disk_total_space($path);
        $free = disk_free_space($path);
        $used = $total - $free;
        $percentage = ($total > 0) ? round(($used / $total) * 100, 2) : 0;

        return [
            'total' => $this->formatBytes($total),
            'free' => $this->formatBytes($free),
            'used' => $this->formatBytes($used),
            'percentage' => $percentage
        ];
    }

    /**
     * Check DB connection
     */
    private function checkDbConnection()
    {
        try {
            DB::connection()->getPdo();
            return [
                'status' => 'Connected',
                'class' => 'success',
                'database' => DB::connection()->getDatabaseName()
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'Disconnected',
                'class' => 'danger',
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Get server uptime (Linux only)
     */
    private function getServerUptime()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            return 'N/A on Windows';
        }

        try {
            $uptime = file_get_contents('/proc/uptime');
            $uptime = explode(' ', $uptime);
            $uptime = (int)$uptime[0];

            $days = floor($uptime / 86400);
            $hours = floor(($uptime % 86400) / 3600);
            $minutes = floor(($uptime % 3600) / 60);

            return "$days days, $hours hours, $minutes minutes";
        } catch (\Exception $e) {
            return 'Unknown';
        }
    }

    /**
     * Format bytes to human readable format
     */
    private function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);

        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    /**
     * Manual Database Backup (Export to SQL)
     */
    public function backup()
    {
        $dbConfig = config('database.connections.' . config('database.default'));
        
        if ($dbConfig['driver'] !== 'mysql' && $dbConfig['driver'] !== 'sqlite') {
            return redirect()->back()->with('error', 'Fitur backup sementara hanya mendukung MySQL atau SQLite.');
        }

        $filename = 'backup-' . date('Y-m-d-His') . '.sql';

        if ($dbConfig['driver'] === 'sqlite') {
            // Check if file exists
            if (file_exists($dbConfig['database'])) {
                return response()->download($dbConfig['database'], $filename);
            }
            return redirect()->back()->with('error', 'Database SQLite tidak ditemukan.');
        }

        // MySQL Backup via mysqldump
        return new StreamedResponse(function () use ($dbConfig) {
            $command = sprintf(
                'mysqldump --user=%s --password=%s --host=%s %s',
                escapeshellarg($dbConfig['username']),
                escapeshellarg($dbConfig['password']),
                escapeshellarg($dbConfig['host']),
                escapeshellarg($dbConfig['database'])
            );

            $handle = popen($command, 'r');
            while (!feof($handle)) {
                echo fread($handle, 1024);
                flush();
            }
            pclose($handle);
        }, 200, [
            'Content-Type' => 'application/sql',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }
}
