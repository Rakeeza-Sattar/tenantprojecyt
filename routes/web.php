<?php
// routes/web.php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    
    // Tenants Routes
    Route::resource('tenants', TenantController::class);
    
    // Customers Routes  
    Route::resource('customers', CustomerController::class);
    
    // Items Routes
    Route::resource('items', ItemController::class);
});