<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Display the dashboard analytics page
     */
    public function index()
    {
        $user = auth()->user();
        
        // Check if user is Admin or Super Admin
        if ($user->role && in_array($user->role->slug, ['super-admin', 'admin'])) {
            return view('pages.dashboard.admin');
        }

        // Default dashboard for non-admin users
        return view('pages.dashboard.user');
    }
}
