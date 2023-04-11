<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepublic;
use App\Http\Controllers\jenisprodukController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
/*
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

Route::get('/la', function () {
    return view('user.pesananku');
});

Route::get('/', [homepublic::class, 'index'])->middleware('guest');
Route::get('/tentang', [homepublic::class, 'tentang']);
Route::get('/Jenisproduk', [homepublic::class, 'kategori']);
Route::get('/Produk', [homepublic::class, 'produk']);
Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class, 'authenticate']);


//ROUTE PUNYA ADMIN
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/customer', [AdminController::class, 'customer']);
Route::get('/pesanan', [AdminController::class, 'pesanan']);
//JENISPRODUK
Route::get('/jenis', [jenisprodukController::class, 'indexdata']);
Route::get('/jenis/addjenis', [jenisprodukController::class, 'indexadd']);
Route::post('/jenis/addjenis', [jenisprodukController::class, 'addjenis']);
Route::delete('/jenis/{id_jenis}', [jenisprodukController::class, 'delete']);
//PRODUK
Route::resource('produkadm', produkController::class);
// Route::get('/Produk', [ProdukController::class, 'indexdata']);
// Route::get('/Produk/addproduk', [ProdukController::class, 'list']);
// Route::post('/Produk/addproduk', [ProdukController::class, 'addProduk']);

//ROUTE PUNYA USER
Route::get('/user', [userController::class, 'index']);
Route::get('/user/profile', [profilecontroller::class, 'indexprofil']);
Route::get('/user/pesanan', [profilecontroller::class, 'pesananku']);
Route::get('/user/kategori', [userController::class, 'kategori']);
Route::get('/user/produk', [userController::class, 'produk']);

//PESANAN
Route::post('/pesan/{id_produk}', [PesananController::class, 'pesan']);
Route::get('/keranjang', [PesananController::class, 'keranjang']);
Route::post('/keranjang', [PesananController::class, 'keranjang']);
Route::delete('/keranjang/{id}', [PesananController::class, 'delete']);
Route::get('/cekot', [PesananController::class, 'inputpsn']);
Route::post('/cekot', [PesananController::class, 'inputpesan']);
Route::get('/cekot/konfirmasipage', [PesananController::class, 'konfirmasipage']);
Route::post('/cekot/konfirmasipage', [PesananController::class, 'konfirmasi']);

//PEMBAYARAN
Route::resource('pembayaran', PembayaranController::class);


Route::get('/findKota', [PesananController::class, 'findKota'])->name('findKota');
Route::get('/findKecamatan', [PesananController::class, 'findKecamatan'])->name('findKecamatan');
Route::get('/findKelurahan', [PesananController::class, 'findKelurahan'])->name('findKelurahan');
Route::get('/findKodepos', [PesananController::class, 'findKodepos'])->name('findKodepos');




