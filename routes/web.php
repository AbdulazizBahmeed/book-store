<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware('auth')->group(function () {

    Route::prefix('orders')->resource('orders', OrderController::class);

    Route::prefix('dashboard')->middleware('role:Administrator')->name('dashboard.')->group(function () {
        Route::prefix('users')->resource('users', UserController::class);
        Route::prefix('categories')->resource('categories', CategoryController::class);
        Route::prefix('books')->resource('books', BookController::class);
    });
});
