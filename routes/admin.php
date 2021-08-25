<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\contentController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\fileUploadController;
use App\Http\Controllers\Admin\blogController;

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/blog', [blogController::class, 'index'])->name('blog');
Route::post('/blog', [blogController::class, 'store'])->name('blog.store');

//Admin controllers
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/content', [contentController::class, 'index'])->name('content');
    Route::get('/content/edit', [contentController::class, 'index'])->name('content.edit');
    Route::post('/content/edit', [contentController::class, 'edit']);

    Route::get('/admin/images', [GalleryController::class, 'index'])->name('gallery');
    Route::post('/admin/images', [GalleryController::class, 'store']);

    Route::get('/gallery', [fileUploadController::class, 'createForm']);
    Route::post('/gallery', [fileUploadController::class, 'fileUpload'])->name('fileUpload');

});