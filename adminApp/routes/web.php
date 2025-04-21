<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SSLCredentailController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard', 301);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('page.dashboard');
Route::resource('/settings', SSLCredentailController::class);
Route::resource('/brands', BrandController::class);
Route::resource('/categories', CategoryController::class);
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');