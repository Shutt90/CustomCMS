<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\contentController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\fileUploadController;
use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\pageController;
use App\Http\Controllers\Admin\termsController;
use App\Http\Controllers\Admin\profileController;
use App\Http\Controllers\Auth\LoginController;

//Admin controllers
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
    
    Route::resources([
        '/content' => contentController::class,
        '/blog' => blogController::class,
        '/gallery' => fileUploadController::class,
        '/page' => pageController::class,
    ]);

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/terms', [termsController::class, 'index'])->name('terms');
    Route::get('/terms/{edit}', [termsController::class, 'edit'])->name('terms.edit');
    Route::put('/terms/update/{id}', [termsController::class, 'update'])->name('terms.update');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    
    Route::resources([
        '/blog' => blogController::class,
    ]);
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [profileController::class, 'index'])->name('profile');
    Route::put('/profile', [profileController::class, 'update'])->name('profile.update');

});