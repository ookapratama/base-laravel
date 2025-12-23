<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

// Dashboard as home page
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// User routes (without CSRF for API testing)
Route::resource('user', UserController::class)->withoutMiddleware([VerifyCsrfToken::class]);
