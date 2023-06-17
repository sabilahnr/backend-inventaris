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
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/show_admin', [AuthController::class, 'show_admin']);

Route::get('me', [AuthController::class, 'me'])->name('auth.me');
//user
Route::get('/show-user', [UserController::class, 'show_user']);
Route::post('/add-user', [UserController::class, 'store_user']);
Route::delete('/delete-user/{id_user}', [UserController::class, 'destroy']);
Route::post('/edit-user/{id_user}', [UserController::class, 'edit_show']);
Route::put('/update-user{id_user}', [UserController::class, 'update']);

//buku
Route::get('/show-buku', [BukuController::class, 'show_buku']);
Route::post('/add-buku', [BukuController::class, 'store_buku']);
Route::delete('/delete-buku', [BukuController::class, 'destroy']);
Route::post('/edit-buku', [BukuController::class, 'edit_show']);
Route::get('/show_detail_buku/{id_buku}', [BukuController::class, 'show_detail']);

//museum
Route::get('/show-museum', [MuseumController::class, 'show_museum']);
Route::post('/add_museum', [MuseumController::class, 'store_museum']);
Route::delete('/delete-museum/{id_museum}', [MuseumController::class, 'destroy']);
Route::get('/edit-museum/{id_museum}', [MuseumController::class, 'edit_show']);
Route::put('/update-museum/{id_museum}', [MuseumController::class, 'update']);

//kualifikasi
Route::get('/show-kualifikasi', [KualifikasiController::class, 'show_kualifikasi']);
Route::post('/add_kualifikasi', [KualifikasiController::class, 'store_kualifikasi']);
Route::delete('/delete-kualifikasi/{id_kualifikasi}', [KualifikasiController::class, 'destroy']);
Route::get('/edit-kualifikasi/{id_kualifikasi}', [KualifikasiController::class, 'edit_show']);
Route::put('/update-kualifikasi/{id_kualifikasi}', [KualifikasiController::class, 'update']);

Route::post('/login', [AuthController::class, 'login']);

//koleksi
Route::get('/show-koleksi', [KoleksiController::class, 'index']);
Route::post('/add-koleksi', [KoleksiController::class, 'store_keris']);

Route::post('/kol-kartu_inv', [KartuInvController::class, 'store_keris']);
Route::post('/add-kartu_registrasi', [KartuRegistrasiController::class, 'store_keris']);
Route::post('/add-kartu_simpan', [KartuSimpanController::class, 'store_keris']);

//ruang
Route::post('/add-ruang', [RuangController::class, 'store_ruang']);
Route::get('/show-ruang', [RuangController::class, 'show_ruang']);
Route::delete('/delete-ruang/{id_ruang}', [RuangController::class, 'destroy']);
Route::post('/edit-ruang/{id_ruang}', [RuangController::class, 'edit_show']);
Route::get('/show_detail_ruang/{id_ruang}', [RuangController::class, 'show_detail']);

Route::post('/add-museum', [MuseumController::class, 'store_museum']);
Route::post('/add-kualifikasi', [KualifikasiController::class, 'store_kualifikasi']);
Route::middleware('auth:sanctum')->group(function () {

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});