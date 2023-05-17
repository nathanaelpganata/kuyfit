<?php

use App\Http\Controllers\Profil;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBank;
use App\Http\Controllers\DashboardBankTambah;
use App\Http\Controllers\DashboardHome;
use App\Http\Controllers\DashboardTambahLapangan;
use App\Http\Controllers\DashboardPesanan;
use App\Http\Controllers\DashboardLapangan;
use App\Http\Controllers\DashboardPesananDetail;
use App\Http\Controllers\Landing;

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

// Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'store'])->name('register');

Route::get('/pesanan/detail-pesanan', function () {
    return view('detailPesanan');
});
Route::get('/tambahopsibank', function () {
    return view('dashboard.tambahOpsiBank');
});


// User
Route::get('/', [Landing::class, 'index'])->name('landing');
Route::get('profil', [Profil::class, 'index'])->name('profil');

// Dashboard
Route::prefix('/my')->group(function () {
    // Home
    Route::get('/', [DashboardHome::class, 'index'])->name('dashboard.home');
    // Pesanan
    Route::get('/pesanan', [DashboardPesanan::class, 'index'])->name('dashboard.pesanan');
    Route::get('/pesanan/detail', [DashboardPesananDetail::class, 'index'])->name('dashboard.pesanan.detail');
    // Lapangan
    Route::get('/lapangan', [DashboardLapangan::class, 'index'])->name('dashboard.lapangan');
    Route::get('/lapangan/tambah', [DashboardTambahLapangan::class, 'index'])->name('dashboard.lapangan.tambah');
    // Bank
    Route::get('/bank', [DashboardBank::class, 'index'])->name('dashboard.bank');
    Route::get('/bank/tambah', [DashboardBankTambah::class, 'index'])->name('dashboard.bank.tambah');
});
