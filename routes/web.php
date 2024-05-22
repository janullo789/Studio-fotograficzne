<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VoucherController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/room', [RoomController::class, 'index'])->name('room');

Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher');



