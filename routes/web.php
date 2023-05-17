<?php

use App\Http\Controllers\Profil;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBank;
use App\Http\Controllers\DashboardHome;
use App\Http\Controllers\TambahLapangan;
use App\Http\Controllers\DashboardPesanan;
use App\Http\Controllers\DashboardLapangan;

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

Route::get('profil', [Profil::class, 'index'])->name('profil');

// User
Route::get('/', function () {
    return view('landing');
});

// Dashboard
Route::prefix('/my')->group(function () {
    Route::get('/', [DashboardHome::class, 'index'])->name('dashboard.home');
    Route::get('/pesanan', [DashboardPesanan::class, 'index'])->name('dashboard.pesanan');
    Route::get('/pesanan/detail-pesanan', function () {
        return view('detailPesanan');
    });
    Route::get('/lapangan', [DashboardLapangan::class, 'index'])->name('dashboard.lapangan');
    Route::get('/lapangan/tambah', [TambahLapangan::class, 'index'])->name('dashboard.lapangan.tambah');
    Route::get('/bank', [DashboardBank::class, 'index'])->name('dashboard.bank');
    Route::get('/bank/tambahopsibank', function () {
        return view('dashboard.tambahOpsiBank');
    });
});
