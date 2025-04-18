<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SSLCredentailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::resource('/settings', SSLCredentailController::class);