<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArtikelController;
use App\http\Controllers\FasilitasController;
use App\http\Controllers\DosenController;
use App\http\Controllers\UkmController;
use App\http\Controllers\FakultasController;
use App\http\Controllers\PrestasiController;
use App\http\Controllers\FrontController;

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





Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/fakultas', function () {
    return view('fakultas');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/detail', [App\Http\Controllers\FrontController::class, 'detail']);
Route::get('/artikel', [App\Http\Controllers\FrontController::class, 'artikel']);
Route::get('/dosen', [App\Http\Controllers\FrontController::class, 'dosen']);
Route::get('/fakultas', [App\Http\Controllers\FrontController::class, 'fakultas']);
Route::get('/artikel{id}', [App\Http\Controllers\FrontController::class, 'detailartikel'])->name('detailartikel');



Route::prefix('/admin')->middleware('auth')->group(function (){
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('artikel', ArtikelController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('dosen', DosenController::class);
Route::resource('ukm', UkmController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('prestasi', PrestasiController::class);
});