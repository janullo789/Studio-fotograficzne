<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\AdminController;
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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/messages', [AdminController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [AdminController::class, 'destroy'])->name('admin.messages.destroy');
    Route::post('/admin/messages/{id}/respond', [AdminController::class, 'respond'])->name('admin.messages.respond');
});





