<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

// Rute untuk halaman kontak
Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');

// Rute untuk halaman tentang kami
Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');

// Rute untuk halaman layanan
Route::get('/service', [PagesController::class, 'service'])->name('service');

// Rute untuk halaman dinamis yang merujuk ke metode 'show' dalam 'PagesController'
Route::get('/maintenance', [PagesController::class, 'maintenance'])->name('maintenance');
Route::get('/error', [PagesController::class, 'error'])->name('error');
Route::get('/login', [PagesController::class, 'login'])->name('login');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

