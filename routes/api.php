<?php

use App\Http\Controllers\API\BukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/add-buku', [BukuController::class, 'store_buku']);

Route::post('/add-koleksi', [BukuController::class, 'store_keris']);
Route::post('/kol-kartu_inv', [BukuController::class, 'store_keris']);
Route::post('/add-kartu_registrasi', [BukuController::class, 'store_keris']);
Route::post('/add-kartu_simpan', [BukuController::class, 'store_keris']);

Route::post('/add-ruang', [BukuController::class, 'store_ruang']);
Route::post('/add-museum', [BukuController::class, 'store_museum']);
Route::post('/add-kualifikasi', [BukuController::class, 'store_kualifikasi']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});
