<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class,'showLogin'])->name('login');
Route::post('/actionlogin',[LoginController::class,'actionLogin'])->name('actionLogin');
Route::get('/logout',[LoginController::class,'actionLogout'])->name('actionLogout');

Route::middleware('auth')->group(function () {
    Route::get('/',[DashboardController::class,'index']);

    Route::get('/user',[UserController::class,'index']);
    Route::get('/user/tambah',[UserController::class,'create']);
    Route::post('/user/simpan',[UserController::class,'store']);
    Route::get('/user/{id}/show',[UserController::class,'show']);
    Route::post('/user/{id}/update',[UserController::class,'update']);
    Route::get('/user/{id}/delete',[UserController::class,'destroy']);

    Route::get('/barang',[BarangController::class,'index']);
    Route::get('/barang/tambah',[BarangController::class,'create']);
    Route::post('/barang/simpan',[BarangController::class,'store']);
    Route::get('/barang/{id}/show',[BarangController::class,'show']);
    Route::post('/barang/{id}/update',[BarangController::class,'update']);
    Route::get('/barang/{id}/delete',[BarangController::class,'destroy']);

    Route::get('/jenis',[JenisController::class,'index']);
    Route::get('/jenis/tambah',[JenisController::class,'create']);
    Route::post('/jenis/simpan',[JenisController::class,'store']);
    Route::get('/jenis/{id}/show',[JenisController::class,'show']);
    Route::post('/jenis/{id}/update',[JenisController::class,'update']);
    Route::get('/jenis/{id}/delete',[JenisController::class,'destroy']);

    Route::get('/supplier',[SupplierController::class,'index']);
    Route::get('/supplier/tambah',[SupplierController::class,'create']);
    Route::post('/supplier/simpan',[SupplierController::class,'store']);
    Route::get('/supplier/{id}/show',[SupplierController::class,'show']);
    Route::post('/supplier/{id}/update',[SupplierController::class,'update']);
    Route::get('/supplier/{id}/delete',[SupplierController::class,'destroy']);

    Route::get('/barang_masuk',[BarangMasukController::class,'index']);
    Route::get('/barang_masuk/tambah',[BarangMasukController::class,'create']);
    Route::post('/barang_masuk/simpan',[BarangMasukController::class,'store']);
    Route::get('/barang_masuk/{id}/show',[BarangMasukController::class,'show']);
    Route::get('/cetakbarangmasuk',[BarangMasukController::class,'cetak'])->middleware('auth');
    Route::get('/barang_masuk/{id}/strukbarangmasuk',[BarangMasukController::class,'struk'])->name('barang_masuk.struk');

    Route::get('/barang_keluar',[BarangKeluarController::class,'index']);
    Route::get('/barang_keluar/tambah',[BarangKeluarController::class,'create']);
    Route::post('/barang_keluar/simpan',[BarangKeluarController::class,'store']);
    Route::get('/barang_keluar/{id}/show',[BarangKeluarController::class,'show']);
    Route::get('/cetakbarangkeluar',[BarangKeluarController::class,'cetak'])->middleware('auth');
    Route::get('/barang_keluar/{id}/strukbarangkeluar',[BarangKeluarController::class,'struk'])->name('home.barang_keluar.struk');

});



