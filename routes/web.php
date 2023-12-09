<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MakerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//NIM   :   10121165
//NAMA  :   Rifki Fauzan Suandi
//KELAS :   IF - 5

Route::get('/', function () {
    return view('welcome');
});

//LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//HOME
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//PELANGGAN
Route::controller(PelangganController::class)->prefix('pelanggan')->group(function(){
    Route::get('', 'pelanggan')->name('pelanggan');
    //Tambah Data
    Route::get('tambahpel', 'add')->name('pelanggan.tambahpel');
    Route::post('tambahpel', 'tambahpel')->name('pelanggan.add.tambahpel');
    //Read Data
    Route::get('detailpel/{id}', 'detailpel')->name('pelanggan.detailpel');
    //Edit Data
    Route::get('editpel/{id}', 'edit')->name('pelanggan.editpel');
    Route::post('editpel/{id}', 'editpel')->name('pelanggan.edit.editpel');
    //Hapus Data
    Route::delete('hapus/{id}', 'destroy')->name('pelanggan.destroy');
});

//KATEGORI
Route::controller(KategoriController::class)->prefix('kategori')->group(function(){
    Route::get('', 'kategori')->name('kategori');
    //Tambah Data
    Route::get('tambahkat', 'add')->name('kategori.tambahkat');
    Route::post('tambahkat', 'tambahkat')->name('kategori.add.tambahkat');
    //Read Data
    Route::get('detailkat/{id}', 'detailkat')->name('kategori.detailkat');
    //Edit Data
    Route::get('editkat/{id}', 'edit')->name('kategori.editkat');
    Route::post('editkat/{id}', 'editkat')->name('kategori.edit.editkat');
    //Hapus Data
    Route::delete('hapus/{id}', 'destroy')->name('kategori.destroy');
});

//PESANAN
Route::controller(PesananController::class)->prefix('pesanan')->group(function(){
    Route::get('', 'pesanan')->name('pesanan');
    //Tambah Data
    Route::get('tambahpes', 'add')->name('pesanan.tambahpes');
    Route::post('tambahpes', 'tambahpes')->name('pesanan.add.tambahpes');
    //Read Data
    Route::get('detailpes/{id}', 'detailpes')->name('pesanan.detailpes');
    //Edit Data
    Route::get('editpes/{id}', 'edit')->name('pesanan.editpes');
    Route::put('editpes/{id}', 'editpes')->name('pesanan.edit.editpes');
    //Hapus Data
    Route::delete('hapus/{id}', 'destroy')->name('pesanan.destroy');
});

//ABOUT
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('maker', [MakerController::class, 'maker'])->name('maker');