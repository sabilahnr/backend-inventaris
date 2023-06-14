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

Route::middleware('auth:sanctum')->group(function () {
Route::get('me', [AuthController::class, 'me'])->name('auth.me');


Route::post('/add-buku', [BukuController::class, 'store_buku']);
Route::delete('/delete-buku', [BukuController::class, 'destroy']);
Route::get('/show-buku', [BukuController::class, 'show']);
Route::post('/edit-buku', [BukuController::class, 'edit_show']);

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