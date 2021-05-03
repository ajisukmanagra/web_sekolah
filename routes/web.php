<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\webcontroller;
use App\Http\Controllers\kecamatancontroller;
use App\Http\Controllers\jenjangcontroller;
use App\Http\Controllers\sekolahcontroller;
use App\Http\Controllers\gurucontroller;

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

Route::get('/', [webcontroller::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//kecamatan
Route::get('/kecamatan', [kecamatanController::class, 'index'])->name('kecamatan');
Route::get('/kecamatan/add', [kecamatanController::class, 'add']);
Route::post('/kecamatan/insert', [kecamatanController::class, 'insert']);
Route::get('/kecamatan/edit/{id_kecamatan}', [kecamatanController::class, 'edit']);
Route::post('/kecamatan/update/{id_kecamatan}', [kecamatanController::class, 'update']);
Route::get('/kecamatan/delete/{id_kecamatan}', [kecamatanController::class, 'delete']);

//jenjang
Route::get('/jenjang', [jenjangController::class, 'index'])->name('jenjang');
Route::get('/jenjang/add', [jenjangController::class, 'add']);
Route::post('/jenjang/insert', [jenjangcontroller::class, 'insert']);
Route::get('/jenjang/edit/{id_jenjang}', [jenjangcontroller::class, 'edit']);
Route::post('/jenjang/update/{id_jenjang}', [jenjangController::class, 'update']);
Route::get('/jenjang/delete/{id_jenjang}', [jenjangController::class, 'delete']);

//sekolah
Route::get('/sekolah', [sekolahController::class, 'index'])->name('sekolah');
Route::get('/sekolah/add', [sekolahController::class, 'add']);
Route::post('/sekolah/insert', [sekolahcontroller::class, 'insert']);
Route::get('/sekolah/edit/{id_sekolah}', [sekolahcontroller::class, 'edit']);
Route::post('/sekolah/update/{id_sekolah}', [sekolahController::class, 'update']);
Route::get('/sekolah/delete/{id_sekolah}', [sekolahController::class, 'delete']);

//GURU
Route::get('/guru', [guruController::class, 'index'])->name('guru');
Route::get('/guru/add', [guruController::class, 'add']);
Route::post('/guru/insert', [gurucontroller::class, 'insert']);
Route::get('/guru/edit/{id_guru}', [gurucontroller::class, 'edit']);
Route::post('/guru/update/{id_guru}', [guruController::class, 'update']);
Route::get('/guru/delete/{id_guru}', [guruController::class, 'delete']);