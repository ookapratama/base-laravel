<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Dashboard as home page
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// User CRUD routes
Route::resource('user', UserController::class);
