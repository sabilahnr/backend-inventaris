<?php

use App\Http\Controllers\API\BukuController;
use App\Http\Controllers\API\KartuInvController;
use App\Http\Controllers\API\KartuMuseumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/show_admin', [AuthController::class, 'show_admin']);

Route::middleware('auth:sanctum')->group(function () {
Route::get('me', [AuthController::class, 'me'])->name('auth.me');
Route::get('pengunjung', [PengunjungController::class, 'show']);

Route::post('/add-buku', [BukuController::class, 'store_buku']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/get-koleksi', [KoleksiController::class, 'index']);
Route::post('/add-koleksi', [KoleksiController::class, 'store_keris']);

Route::post('/kol-kartu_inv', [KartuInvController::class, 'store_keris']);
Route::post('/add-kartu_registrasi', [KartuRegistrasiController::class, 'store_keris']);
Route::post('/add-kartu_simpan', [KartuSimpanController::class, 'store_keris']);

Route::post('/add-ruang', [RuangController::class, 'store_ruang']);
Route::post('/add-museum', [MuseumController::class, 'store_museum']);
Route::post('/add-kualifikasi', [KualifikasiController::class, 'store_kualifikasi']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});

Route::post('/login', [AuthController::class, 'login']); 