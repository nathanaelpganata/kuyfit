<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyOrders;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReceiveOrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RenterProfileController;
use App\Http\Controllers\VenueController;

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

// GUEST
Route::middleware(['guest'])->group(function () {
    // LANDING
    Route::get('/', [Landing::class, 'landingGuest'])->name('landing.guest');
    // LOGIN
    Route::get('/login', function(){
        return view('auth.login');
    })->name('login.index');
    Route::post('/login', [LoginController::class, 'loginAccount'])->name('login.store');
    // REGISTER
    Route::get('/register', function(){
        return view('auth.signup');
    })->name('register.index');
    Route::post('/register', [RegisterController::class, 'registerAccount'])->name('register.store');
});

// SESSION
Route::middleware(['auth.kuyfit'])->group(function () {

    // AKUN PENYEWA
    Route::get('/home', [Landing::class, 'landing'])->name('landing');
    Route::get('/myorders', [MyOrders::class, 'showMyOrders'])->name('myorders');
    Route::get('/profile', [RenterProfileController::class, 'showRenterProfile'])->name('profile');
    Route::put('/profile/{id}/edit', [RenterProfileController::class, 'updateRenterProfile'])->name('profile.update');
    // EXPLORE
    Route::get('/explore', function(){
        return view('explore');
    })->name('Explore');
    Route::get('/explore/badminton', [VenueController::class, 'showBadmintonVenueList'])->name('badminton');
    Route::get('/explore/basketball', [VenueController::class, 'showBasketVenueList'])->name('basketball');
    Route::get('/explore/futsal', [VenueController::class, 'showFutsalVenueList'])->name('futsal');
    // ORDER
    Route::get('/order/{id}', [OrderController::class, 'showOrderStep']);
    Route::post('/order/{id}/store', [OrderController::class, 'sendOrderRequest']);
    // LOGOUT
    Route::get('/logout', [LoginController::class, 'logoutAccount'])->name('logout.index');

    // AKUN PEMILIK LAPANGAN
    Route::prefix('/my')->middleware('auth.pemilik')->group(function () {
        // DASHBOARD
        Route::get('/', [ReceiveOrderController::class, 'showDashboard'])->name('dashboard.home');
        // PESANAN
        Route::get('/pesanan', [ReceiveOrderController::class, 'showOrders'])->name('dashboard.pesanan');
        Route::get('/pesanan/detail/{id}', [ReceiveOrderController::class, 'showOrderDetails'])->name('dashboard.detailPesanan');
        Route::post('/pesanan/detail/{id}/action', [ReceiveOrderController::class, 'sendOrderStatus'])->name('dashboard.updatePesanan.action');
        // LAPANGAN
        Route::get('/lapangan', [VenueController::class, 'showVenue'])->name('dashboard.lapangan');
        Route::get('/lapangan/tambah', function(){
            return view('dashboard.tambahLapangan');
        })->name('dashboard.lapangan.tambah');
        Route::post('/lapangan', [VenueController::class, 'addVenue'])->name('dashboard.lapangan.store');
        Route::get('/lapangan/{id}', [VenueController::class, 'showVenueDetail'])->name('dashboard.lapangan.show');
        Route::get('/lapangan/{id}/edit', [VenueController::class, 'editVenueDetail'])->name('dashboard.lapangan.edit');
        Route::put('/lapangan/{id}', [VenueController::class, 'updateVenueDetail'])->name('dashboard.lapangan.update');
        Route::delete('/lapangan/{id}', [VenueController::class, 'deleteVenue'])->name('dashboard.lapangan.destroy');
    });
});
