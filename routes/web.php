<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PhysicalInventoryController;
use App\Http\Controllers\AssetMovementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Rotas públicas
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rotas protegidas
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [AssetController::class, 'dashboard'])->name('dashboard');
    Route::resource('asset_movements', AssetMovementController::class);
    Route::resource('assets', AssetController::class);
    Route::resource('physical_inventories', PhysicalInventoryController::class);
    Route::resource('users', UserController::class);
});
