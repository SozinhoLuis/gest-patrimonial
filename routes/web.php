<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('assets', AssetController::class);
Route::get('/', [AssetController::class, 'dashboard'])->name('dashboard');
