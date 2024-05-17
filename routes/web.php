<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;


// Route Website Page
Route::get('/', [App\Http\Controllers\Website\HomePageController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\Website\ContactPageController::class, 'index'])->name('contact-page');
Route::get('/about', [App\Http\Controllers\Website\AboutPageController::class, 'index'])->name('about-page');
Route::get('/articles', [App\Http\Controllers\Website\ArticlesPageController::class, 'index'])->name('articles-page');
Route::get('/articles/{id}', [App\Http\Controllers\Website\ArticlesPageController::class, 'detail'])->name('articles-detail');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/partnership', [App\Http\Controllers\Website\PartnershipPageController::class, 'index'])->name('partnership-page');
    Route::post('/partnership/store', [App\Http\Controllers\Website\PartnershipPageController::class, 'store'])->name('partnership-page.store');
});

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
    Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index')->middleware('isAdmin');
    Route::get('/user', [App\Http\Controllers\Dashboard\DashboardUserController::class, 'index'])->name('dashboard.user');
    Route::resource('post', App\Http\Controllers\Dashboard\PostController::class);
    Route::resource('category', App\Http\Controllers\Dashboard\CategoryController::class);
    Route::resource('users', App\Http\Controllers\Dashboard\UserController::class);
    Route::get('partnership', [App\Http\Controllers\Dashboard\PartnershipController::class, 'index'])->name('partnership.index');
});
