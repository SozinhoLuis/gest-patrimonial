<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\PhysicalInventoryController;
use App\Http\Controllers\AssetMovementController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;







Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('/logout', function () {
        auth()->logout();

        return response()->json(['message' => 'Logged out successfully']);
    });

    Route::resource('asset_movements', AssetMovementController::class);
    Route::resource('assets', AssetController::class);
    // Route::get('/', [AssetController::class, 'dashboard'])->name('dashboard');
    Route::resource('physical_inventories', PhysicalInventoryController::class);
    Route::resource('users', UserController::class);

});
