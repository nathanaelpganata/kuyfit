<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Basket;
use App\Http\Controllers\Futsal;
use App\Http\Controllers\Profil;
use App\Http\Controllers\Landing;
use App\Http\Controllers\Register;
use App\Http\Controllers\Badminton;
use App\Http\Controllers\VenueOrder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardBank;
use App\Http\Controllers\DashboardHome;
use App\Http\Controllers\DashboardPesanan;
use App\Http\Controllers\DashboardLapangan;
use App\Http\Controllers\DashboardBankTambah;

use App\Http\Controllers\DashboardPesananDetail;
use App\Http\Controllers\Explore;

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


// User
Route::get('/', [Landing::class, 'index'])->name('landing');
Route::get('/explore', [Explore::class, 'index'])->name('Explore');
Route::get('/profil', [Profil::class, 'index'])->name('profil');
Route::get('/explore/badminton', [Badminton::class, 'index'])->name('badminton');
Route::get('/explore/basket', [Basket::class, 'index'])->name('basket');
Route::get('/explore/futsal', [Futsal::class, 'index'])->name('futsal');
Route::get('/order/{id}', [VenueOrder::class, 'index']);
Route::post('/order/{id}', [VenueOrder::class, 'store']);


Route::middleware(['guest'])->group(function () {
    // Auth
    Route::get('/login', [Login::class, 'index'])->name('login.index');
    Route::post('/login', [Login::class, 'login'])->name('login.store');

    Route::get('/register', [Register::class, 'index'])->name('register.index');
    Route::post('/register', [Register::class, 'store'])->name('register.store');
});

// Dashboard
Route::middleware(['auth.kuyfit'])->group(function () {
    Route::get('/logout', [Login::class, 'logout'])->name('logout.index');

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
});
