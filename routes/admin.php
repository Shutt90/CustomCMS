<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUpload;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Admin controllers
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/content', [ContentController::class, 'index'])->name('content');
    Route::get('/content/edit', [ContentController::class, 'index'])->name('content.edit');
    Route::post('/content/edit', [ContentController::class, 'edit']);

    Route::get('/admin/images', [GalleryController::class, 'index'])->name('gallery');
    Route::post('/admin/images', [GalleryController::class, 'store']);

    Route::get('/upload-file', [FileUpload::class, 'createForm']);
    Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
});