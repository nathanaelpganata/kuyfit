<?php

use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

// Register
Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'store'])->name('register');

