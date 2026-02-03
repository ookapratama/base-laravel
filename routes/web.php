<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

// Auth Routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Dashboard as home page
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // User CRUD routes
    Route::resource('user', UserController::class)->middleware('check.permission:user.index');

    // Role & Menu Management
    Route::resource('role', \App\Http\Controllers\RoleController::class)->middleware('check.permission:role.index');
    Route::resource('menu', \App\Http\Controllers\MenuController::class)->middleware('check.permission:menu.index');
    Route::get('permission', [\App\Http\Controllers\PermissionController::class, 'index'])->name('permission.index')->middleware('check.permission:permission.index');
    Route::put('permission', [\App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update')->middleware('check.permission:permission.index');

    // Products CRUD routes
    Route::get('products/export/excel', [ProductsController::class, 'exportExcel'])->name('products.export.excel')->middleware('check.permission:products.index');
    Route::get('products/export/pdf', [ProductsController::class, 'exportPdf'])->name('products.export.pdf')->middleware('check.permission:products.index');
    Route::post('products/import/excel', [ProductsController::class, 'importExcel'])->name('products.import.excel')->middleware('check.permission:products.index');
    Route::resource('products', ProductsController::class)->middleware('check.permission:products.index');

    // Activity Log
    Route::get('activity-log', [\App\Http\Controllers\ActivityLogController::class, 'index'])->name('activity-log.index');
    Route::get('activity-log/data', [\App\Http\Controllers\ActivityLogController::class, 'getData'])->name('activity-log.data');
    Route::get('activity-log/statistics', [\App\Http\Controllers\ActivityLogController::class, 'statistics'])->name('activity-log.statistics');

    // Website Settings
    Route::get('settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings.index')->middleware('check.permission:settings.index');
    Route::post('settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update')->middleware('check.permission:settings.index');

    // Personal Profile
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/password', [\App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('profile.password.update');

    // Impersonate Features
    Route::get('impersonate/start/{id}', [\App\Http\Controllers\ImpersonateController::class, 'start'])->name('impersonate.start');
    Route::get('impersonate/stop', [\App\Http\Controllers\ImpersonateController::class, 'stop'])->name('impersonate.stop');
});

