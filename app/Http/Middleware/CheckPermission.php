<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $menuSlug): Response
    {
        $actionMap = [
            'index'        => 'read',
            'show'         => 'read',
            'create'       => 'create',
            'store'        => 'create',
            'edit'         => 'update',
            'update'       => 'update',
            'destroy'      => 'delete',
            'exportExcel'  => 'read',
            'exportPdf'    => 'read',
            'importExcel'  => 'create',
            'clearCache'   => 'update',
        ];

        $routeName = $request->route()->getName();
        $routeParts = explode('.', $routeName);
        $method = end($routeParts);

        $action = $actionMap[$method] ?? 'read';

        // Additional handling for custom routes like permission.index
        if ($routeName === 'permission.index') $action = 'read';
        if ($routeName === 'permission.update') $action = 'update';

        if (!$request->user() || !$request->user()->hasPermission($menuSlug, $action)) {
            abort(403, 'Akses ditolak. Anda tidak memiliki izin untuk tindakan ini.');
        }

        return $next($request);
    }
}
