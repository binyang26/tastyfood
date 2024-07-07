<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\GetimagesController;

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
// Pages
Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('tentang', [pageController::class, 'tentang'])->name('tentang');
Route::get('berita', [pageController::class, 'berita'])->name('berita');
Route::get('galeri', [pageController::class, 'galeri'])->name('galeri');
Route::get('footer', [pageController::class, 'footer'])->name('footer');
Route::get('kontak', [pageController::class, 'kontak'])->name('kontak');
Route::post('kontak', [pageController::class, 'kirim'])->name('kontak.kirim');
Route::get('singlepage/{id}', [pageController::class, 'singlepage'])->name('singlepage');

// Login
Route::get('/login',[loginController::class, 'index'])->name('')->name('login')->middleware('guest');
Route::post('/login',[loginController::class, 'authentication']);
Route::post('/logout',[loginController::class, 'logout'])->name('logout');

// Register
Route::get('/register',[registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register',[registerController::class, 'store'])->name('');

// Admin
Route::resource('/admin', adminController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/berita', beritaController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/galeri', galeriController::class)->middleware('auth')->except(['show']);

Route::resource('/admin/contact', contactController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/tentang', tentangController::class)->middleware('auth')->except(['show']);

Route::get('/public/img/{filename}', [GetimagesController::class, 'displayImage'])->name('image-berita');






