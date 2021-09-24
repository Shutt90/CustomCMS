<?php

use Illuminate\Support\Facades\Route;

//Auth Controllers
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\front\ContentController;
//Front Controllers
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\BlogController;

//test


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


Route::group(['middleware' => 'web'], function() {
        
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/content', [ContentController::class, 'index'])->name('content');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

});