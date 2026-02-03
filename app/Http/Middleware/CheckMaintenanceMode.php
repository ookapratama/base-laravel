<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get maintenance mode setting
        $isMaintenance = get_setting('maintenance_mode', '0');

        if ($isMaintenance === '1') {
            // Bypass maintenance mode for logged in super-admin
            if (auth()->check() && auth()->user()->role && auth()->user()->role->slug === 'super-admin') {
                return $next($request);
            }

            // Also allow the settings page itself so super admin can turn it off 
            // (but they are already bypassed above if logged in)
            
            // For others, show maintenance page or abort
            if (!$request->is('login') && !$request->is('logout')) {
                abort(503, 'Aplikasi sedang dalam pemeliharaan. Silakan coba beberapa saat lagi.');
            }
        }

        return $next($request);
    }
}
