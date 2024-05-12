<?php

use Illuminate\Support\Facades\Route;


// Route Home Page
Route::get('/', [App\Http\Controllers\Website\HomePageController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest:web'], function () {
    // Route Login & Register
    Route::get('/register', [App\Http\Controllers\Website\RegisterController::class, 'index'])->name('register');
    Route::post('/register', [App\Http\Controllers\Website\RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [App\Http\Controllers\Website\LoginController::class, 'index'])->name('login');
    Route::post('/login', [App\Http\Controllers\Website\LoginController::class, 'store'])->name('login.store');
});

// Route Logout
Route::get('/logout', [App\Http\Controllers\Website\LoginController::class, 'logout'])->name('logout')->middleware('auth:web');

// Route Dashboard
Route::prefix('dashboard')->middleware('auth:web')->group(function () {
    Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

    // Route Post
    Route::resource('post', App\Http\Controllers\Dashboard\PostController::class);
    Route::resource('category', App\Http\Controllers\Dashboard\CategoryController::class);
    Route::resource('users', App\Http\Controllers\Dashboard\UserController::class);
});
