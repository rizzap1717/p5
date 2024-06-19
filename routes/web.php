<?php

use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\wisata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $kategori = Kategori::all();
    $lokasi = Lokasi::all();
    $wisata = wisata::all();
    return view('welcome',compact('kategori','lokasi','wisata'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');
Route::resource('lokasi', App\Http\Controllers\LokasiController::class)->middleware('auth');
Route::resource('wisata', App\Http\Controllers\WisataController::class);
