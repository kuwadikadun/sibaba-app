<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelakuController;
use App\Http\Controllers\PerkaraController;
use App\Http\Controllers\PenyimpananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/login/admin',  [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/logout/admin', [App\Http\Controllers\LoginController::class, 'logout']);

// Route::get('/login', [AuthLoginController::class, 'index']);

Route::get('/tes', [LoginController::class, 'tes']);

Route::get('/', [AdminController::class, 'index']);

Route::get('/profil/tugas-pokok-fungsi', [InfoController::class, 'tugasPokok']);
Route::get('/profil/dasar-hukum', [InfoController::class, 'dasarHukum']);
Route::get('/profil/kode-etik-pegawai', [InfoController::class, 'kodeEtik']);
Route::get('/profil/kewajiban-larangan', [InfoController::class, 'kewajiban']);

Route::get('/regulasi/undang-undang', [InfoController::class, 'uu']);
Route::get('/regulasi/peraturan-pemerintah', [InfoController::class, 'pp']);
Route::get('/regulasi/peraturan-presiden', [InfoController::class, 'perpres']);

Route::get('/data-barang', [BarangController::class, 'dataBarang']);
Route::get('/data-barang/tambah', [BarangController::class, 'tambah']);





// Admin

// Pelaku
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    // Akun
    Route::get('/admin/akun', [AkunController::class, 'index']);
    Route::get('/admin/akun/create', [AkunController::class, 'create']);
    Route::post('/admin/akun/store', [App\Http\Controllers\AkunController::class, 'store']);
    Route::get('/admin/akun/edit/{id}', [App\Http\Controllers\AkunController::class, 'edit']);
    Route::patch('/admin/akun/update/{id}', [App\Http\Controllers\AkunController::class, 'update']);
    Route::delete('/admin/akun/delete/{id}', [App\Http\Controllers\AkunController::class, 'delete']);



    // Pelaku
    Route::get('/admin/pelaku', [PelakuController::class, 'index']);
    Route::get('/admin/pelaku/create', [PelakuController::class, 'create']);
    Route::post('/admin/pelaku/store', [App\Http\Controllers\PelakuController::class, 'store']);
    Route::get('/admin/pelaku/edit/{id}', [App\Http\Controllers\PelakuController::class, 'edit']);
    Route::patch('/admin/pelaku/update/{id}', [App\Http\Controllers\PelakuController::class, 'update']);
    Route::delete('/admin/pelaku/delete/{id}', [App\Http\Controllers\PelakuController::class, 'delete']);
    Route::get('/admin/pelaku/cetak', [PelakuController::class, 'cetak']);

    // Penyimpanan
    Route::get('/admin/penyimpanan', [PenyimpananController::class, 'index']);
    Route::get('/admin/penyimpanan/create', [PenyimpananController::class, 'create']);
    Route::post('/admin/penyimpanan/store', [App\Http\Controllers\PenyimpananController::class, 'store']);
    Route::get('/admin/penyimpanan/edit/{id}', [App\Http\Controllers\PenyimpananController::class, 'edit']);
    Route::patch('/admin/penyimpanan/update/{id}', [App\Http\Controllers\PenyimpananController::class, 'update']);
    Route::delete('/admin/penyimpanan/delete/{id}', [App\Http\Controllers\PenyimpananController::class, 'delete']);
   
    // Barang Sitaan
    Route::get('/admin/barang', [BarangController::class, 'index']);
    Route::get('/admin/barang/create', [BarangController::class, 'create']);
    Route::post('/admin/barang/store', [App\Http\Controllers\BarangController::class, 'store']);
    Route::get('/admin/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit']);
    Route::patch('/admin/barang/update/{id}', [App\Http\Controllers\BarangController::class, 'update']);
    Route::delete('/admin/barang/delete/{id}', [App\Http\Controllers\BarangController::class, 'delete']);
    Route::get('/admin/barang/cetak', [BarangController::class, 'cetak']);

    // Perkara
    Route::get('/admin/perkara', [PerkaraController::class, 'index']);
    Route::get('/admin/perkara/create', [PerkaraController::class, 'create']);
    Route::post('/admin/perkara/store', [App\Http\Controllers\PerkaraController::class, 'store']);
    Route::get('/admin/perkara/edit/{id}', [App\Http\Controllers\PerkaraController::class, 'edit']);
    Route::patch('/admin/perkara/update/{id}', [App\Http\Controllers\PerkaraController::class, 'update']);
    Route::delete('/admin/perkara/delete/{id}', [App\Http\Controllers\PerkaraController::class, 'delete']);
    Route::get('/admin/perkara/cetak', [PerkaraController::class, 'cetak']);
