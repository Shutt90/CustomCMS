<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\contentController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\fileUploadController;
use App\Http\Controllers\Admin\pageController;
use App\Http\Controllers\Admin\termsController;
use App\Http\Controllers\Admin\profileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\categoryController;    
use App\Http\Controllers\Admin\isAdminController;
use App\Http\Controllers\Admin\postController;

//Admin controllers
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
    
    Route::resources([
        '/content' => contentController::class,
        '/gallery' => fileUploadController::class,
        '/page' => pageController::class,
        '/categories' => categoryController::class,
    ]);

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/terms', [termsController::class, 'index'])->name('terms');
    Route::get('/terms/{edit}', [termsController::class, 'edit'])->name('terms.edit');
    Route::put('/terms/update/{id}', [termsController::class, 'update'])->name('terms.update');
    Route::get('/users', [isAdminController::class, 'index'])->name('users.index');
    Route::put('/users/{id}', [isAdminController::class, 'update'])->name('users.update');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    
    Route::resources([
        '/post' => postController::class,
    ]);
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [profileController::class, 'index'])->name('profile');
    Route::put('/profile', [profileController::class, 'update'])->name('profile.update');
    Route::get('/profile/{user:username}/posts', [profileController::class, 'show'])->name('user.posts');
});