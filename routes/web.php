<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Dashboard as home page
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// User CRUD routes
Route::resource('user', UserController::class);

// Role & Menu Management
Route::resource('role', \App\Http\Controllers\RoleController::class);
Route::resource('menu', \App\Http\Controllers\MenuController::class);
Route::get('permission', [\App\Http\Controllers\PermissionController::class, 'index'])->name('permission.index');
Route::put('permission', [\App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');
