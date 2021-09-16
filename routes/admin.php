<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\contentController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\fileUploadController;
use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\aboutController;

//Admin controllers
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    
    Route::resources([
        '/content' => contentController::class,
        '/blog' => blogController::class,
        '/gallery' => fileUploadController::class,
        '/about' => aboutController::class,
    ]);

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    
});