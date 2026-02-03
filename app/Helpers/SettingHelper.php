<?php

if (!function_exists('get_setting')) {
    /**
     * Get setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function get_setting(string $key, $default = null)
    {
        return app(\App\Services\SettingService::class)->get($key, $default);
    }
}
