<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\AdminController;
use \App\Http\Controllers\ReservationController;
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
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


Route::get('/booking', [BookingController::class, 'index'])->name('booking');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/room', [RoomController::class, 'index'])->name('room');

Route::get('/voucher', [VoucherController::class, 'index'])->name('voucher');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/available-slots', [ReservationController::class, 'availableSlots']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/messages', [AdminController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [AdminController::class, 'destroy'])->name('admin.messages.destroy');
    Route::post('/admin/messages/{id}/respond', [AdminController::class, 'respond'])->name('admin.messages.respond');
    Route::get('/admin/reservations', [AdminController::class, 'reservations'])->name('admin.reservations');
    Route::delete('/admin/reservations/{id}', [AdminController::class, 'cancelReservation'])->name('admin.reservations.cancel');
});





