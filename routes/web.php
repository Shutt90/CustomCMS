<?php

use Illuminate\Support\Facades\Route;

//Auth Controllers
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//Front Controllers
use App\Http\Controllers\front\HomeController;

//Admin controllers
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUpload;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
    
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'fetch']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/content', [ContentController::class, 'index'])->name('content');
Route::get('/content/edit', [ContentController::class, 'index'])->name('content.edit');
Route::post('/content/edit', [ContentController::class, 'edit']);

Route::get('/admin/images', [GalleryController::class, 'index'])->name('gallery');
// Route::resource('admin/images', [GalleryController::class, 'index']);
Route::post('/admin/images', [GalleryController::class, 'store']);

Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');