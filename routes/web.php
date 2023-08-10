<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InfoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index']);

Route::get('/tes', [LoginController::class, 'tes']);

Route::get('/', [AdminController::class, 'index']);

Route::get('/profil/tugas-pokok-fungsi', [InfoController::class, 'tugasPokok']);
Route::get('/profil/dasar-hukum', [InfoController::class, 'dasarHukum']);
Route::get('/profil/kode-etik-pegawai', [InfoController::class, 'kodeEtik']);
Route::get('/profil/kewajiban-larangan', [InfoController::class, 'kewajiban']);

Route::get('/regulasi/undang-undang', [InfoController::class, 'uu']);
Route::get('/regulasi/peraturan-pemerintah', [InfoController::class, 'pp']);
Route::get('/regulasi/peraturan-presiden', [InfoController::class, 'perpres']);

Route::get('/data-barang', [BarangController::class, 'index']);
Route::get('/data-barang/tambah', [BarangController::class, 'tambah']);