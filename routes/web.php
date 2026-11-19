<?php

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

/*
|--------------------------------------------------------------------------
| SeaSupply — Marketplace UMKM Olahan Laut
|--------------------------------------------------------------------------
*/

// Landing page
Route::get('/', function () {
    return view('welcome');
});

// Wireframe A — Katalog Pembeli
Route::get('/katalog', function () {
    return view('katalog');
});

// Wireframe B — Detail Produk (generic route)
Route::get('/produk/{slug}', function ($slug) {
    return view('produk-detail');
});

// Wireframe C — Dashboard Pemilik Usaha
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/produk', function () {
    return view('dashboard');
});

Route::get('/dashboard/produk/tambah', function () {
    return view('dashboard');
});

Route::get('/dashboard/pesanan', function () {
    return view('dashboard');
});

Route::get('/dashboard/keuangan', function () {
    return view('dashboard');
});

// Wireframe D — Operasional Pegawai (Akses Terbatas)
Route::get('/pegawai', function () {
    return view('pegawai');
});

Route::get('/pegawai/pesanan', function () {
    return view('pegawai');
});

Route::get('/pegawai/produk', function () {
    return view('pegawai');
});

// Placeholder routes
Route::get('/pesanan', function () {
    return redirect('/katalog');
});

Route::get('/akun', function () {
    return redirect('/');
});
