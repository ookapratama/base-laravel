<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Display the dashboard analytics page
     */
    public function index()
    {
        return view('pages.dashboard.dashboards-analytics');
    }
}
