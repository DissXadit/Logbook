<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Users\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Admin\SampelController;
use App\Http\Controllers\Users\SampelController as UserSampelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');

//Bagian Interface Admin
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin/home', [AdminDashboardController::class, 'index'])->name('dashboardAdmin');

    //Bagian User
    Route::post('update-user', [UserController::class, 'updateUser'])->name('update-user');
    Route::post('hapus-data', [UserController::class, 'hapusData'])->name('hapus-user');
    Route::post('simpan-user', [UserController::class, 'simpanData'])->name('simpan-user');

    Route::get('User', [UserController::class, 'index'])->name('user');
    Route::get('tambah-user', [UserController::class, 'formTambah'])->name('tambah-user');
});

//Bagian Interface User
Route::group(['middleware' => ['auth:user,admin']], function () {
    Route::get('dashboard', [BerandaController::class, 'index'])->name('dashboard');
    Route::get('/users/home', [DashboardController::class, 'index'])->name('dashboardUser');
    //Bagian Produk
    Route::post('simpan-produk', [ProdukController::class, 'simpanProduk'])->name('simpan');
    Route::post('update-produk', [ProdukController::class, 'updateProduk'])->name('update-produk');
    Route::get('cetakPdf', [ProdukController::class, 'cetakPdf'])->name('cetakPdf');
    Route::post('hapus-produk', [ProdukController::class, 'hapusProduk'])->name('hapus-produk');
    Route::post('simpan-produk', [ProdukController::class, 'simpanData'])->name('simpan-produk');

    Route::get('edit-produk/{id}', [ProdukController::class, 'formEdit'])->name('edit-produk');
    Route::get('Produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('tambah-produk', [ProdukController::class, 'formTambah'])->name('tambah-produk');

    //Bagian Sampel
    Route::post('simpan', [SampelController::class, 'simpanAnaslis'])->name('simpan');
    Route::post('update-sampel', [SampelController::class, 'updateData'])->name('update-sampel');
    Route::post('hapus-sampel', [SampelController::class, 'hapusData'])->name('hapus-sampel');
    Route::post('simpan-sampel', [SampelController::class, 'simpanData'])->name('simpan-sampel');

    Route::get('form-edit/{id}', [SampelController::class, 'formEdit'])->name('form-edit');
    Route::get('Sampel', [SampelController::class, 'index'])->name('sampel');
    Route::get('cetakPDF', [SampelController::class, 'cetakPDF'])->name('cetakPDF');
    Route::get('form-tambah', [SampelController::class, 'formTambah'])->name('form-tambah');
});


Route::group(['middleware' => []], function () {});







Route::get('logout', [AuthController::class, 'logout'])->name('logout');