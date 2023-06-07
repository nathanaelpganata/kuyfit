<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Basketball;
use App\Http\Controllers\Futsal;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Landing;
use App\Http\Controllers\Register;
use App\Http\Controllers\Badminton;
use App\Http\Controllers\VenueOrder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardHome;
use App\Http\Controllers\DashboardPesanan;
use App\Http\Controllers\DashboardLapangan;
use App\Http\Controllers\DashboardPesananDetail;
use App\Http\Controllers\Explore;
use App\Http\Controllers\ReceiveOrderController;
use App\Http\Controllers\MyOrders;

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
Route::get('/profile', [Profile::class, 'index'])->name('profile');
Route::get('/explore/badminton', [Badminton::class, 'index'])->name('badminton');
Route::get('/explore/basketball', [Basketball::class, 'index'])->name('basketball');
Route::get('/explore/futsal', [Futsal::class, 'index'])->name('futsal');
Route::get('/myorders', [MyOrders::class, 'index'])->name('MyOrders');


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

    // Order
    Route::get('/order/{id}', [VenueOrder::class, 'index']);
    Route::post('/order/{id}/store', [VenueOrder::class, 'store']);


    Route::prefix('/my')->group(function () {
        // Home
        Route::get('/', [ReceiveOrderController::class, 'showDashboard'])->name('dashboard.home');
        // Pesanan
        Route::get('/pesanan', [ReceiveOrderController::class, 'showOrders'])->name('dashboard.pesanan');
        Route::get('/pesanan/detail', [DashboardPesananDetail::class, 'index'])->name('dashboard.pesanan.detail');
        Route::get('/pesanan/detail/{id}', [ReceiveOrderController::class, 'showOrderDetails'])->name('dashboard.detailPesanan');
        Route::get('/pesanan/detail/{id}/update/{status}', [ReceiveOrderController::class, 'orderDecision'])->name('dashboard.updatePesanan');
        // Lapangan
        Route::get('/lapangan', [DashboardLapangan::class, 'index'])->name('dashboard.lapangan');
        Route::get('/lapangan/tambah', [DashboardLapangan::class, 'create'])->name('dashboard.lapangan.tambah');
        Route::post('/lapangan', [DashboardLapangan::class, 'store'])->name('dashboard.lapangan.store');
        Route::get('/lapangan/{id}', [DashboardLapangan::class, 'show'])->name('dashboard.lapangan.show');
        Route::get('/lapangan/{id}/edit', [DashboardLapangan::class, 'edit'])->name('dashboard.lapangan.edit');
        Route::put('/lapangan/{id}', [DashboardLapangan::class, 'update'])->name('dashboard.lapangan.update');
        Route::delete('/lapangan/{id}', [DashboardLapangan::class, 'destroy'])->name('dashboard.lapangan.destroy');
    });
});
