<?php

use App\Http\Controllers\API\BukuController;
use App\Http\Controllers\API\KartuInvController;
use App\Http\Controllers\API\KartuRegistrasiController;
use App\Http\Controllers\API\KartuSimpanController;
use App\Http\Controllers\API\KartuMuseumController;
use App\Http\Controllers\API\KoleksiController;
use App\Http\Controllers\API\KualifikasiController;
use App\Http\Controllers\API\MuseumController;
use App\Http\Controllers\API\RuangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/show_admin', [AuthController::class, 'show_admin']);

Route::get('me', [AuthController::class, 'me'])->name('auth.me');

//buku
Route::get('/show-buku', [BukuController::class, 'show_buku']);
Route::post('/add-buku', [BukuController::class, 'store_buku']);
Route::delete('/delete-buku', [BukuController::class, 'destroy']);
Route::post('/edit-buku', [BukuController::class, 'edit_show']);

//museum
Route::get('/show-museum', [MuseumController::class, 'show_museum']);

//kualifikasi
Route::get('/show-kualifikasi', [KualifikasiController::class, 'show_kualifikasi']);

Route::post('/login', [AuthController::class, 'login']);


Route::get('/show_detail_buku/{id_buku}', [BukuController::class, 'show_detail']);

Route::get('/get-koleksi', [KoleksiController::class, 'index']);
Route::post('/add-koleksi', [KoleksiController::class, 'store_keris']);

Route::post('/kol-kartu_inv', [KartuInvController::class, 'store_keris']);
Route::post('/add-kartu_registrasi', [KartuRegistrasiController::class, 'store_keris']);
Route::post('/add-kartu_simpan', [KartuSimpanController::class, 'store_keris']);

Route::post('/add-ruang', [RuangController::class, 'store_ruang']);
Route::post('/add-museum', [MuseumController::class, 'store_museum']);
Route::post('/add-kualifikasi', [KualifikasiController::class, 'store_kualifikasi']);
Route::middleware('auth:sanctum')->group(function () {

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});