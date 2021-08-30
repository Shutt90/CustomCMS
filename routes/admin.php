<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\contentController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\fileUploadController;
use App\Http\Controllers\Admin\blogController;

//Admin controllers
Route::group(['middleware' => 'auth'], function() {
    
    Route::resources([
        '/content' => contentController::class,
        '/blog' => blogController::class,
        '/gallery' => fileUploadController::class,
    ]);

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    
});