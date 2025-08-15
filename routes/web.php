<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Tenants Routes
    Route::resource('tenants', TenantController::class);
    
    // Customers Routes
    Route::resource('customers', CustomerController::class);
    
    // Items Routes
    Route::resource('items', ItemController::class);
});

require __DIR__.'/auth.php';
