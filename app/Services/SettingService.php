<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    protected $cacheKey = 'app_settings';

    /**
     * Get all settings grouped by group name
     */
    public function getAllGrouped()
    {
        return Setting::all()->groupBy('group');
    }

    /**
     * Get setting value by key (with caching)
     */
    public function get(string $key, $default = null)
    {
        $settings = $this->getAllCached();
        return $settings[$key] ?? $default;
    }

    /**
     * Get all settings from cache or DB
     */
    public function getAllCached()
    {
        return Cache::rememberForever($this->cacheKey, function () {
            return Setting::pluck('value', 'key')->toArray();
        });
    }

    /**
     * Update settings
     */
    public function updateMany(array $data)
    {
        foreach ($data as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }
        
        $this->clearCache();
    }

    /**
     * Clear settings cache
     */
    public function clearCache()
    {
        Cache::forget($this->cacheKey);
    }
}
