<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/",[PageController::class,"home"])->name("home");
Route::post("/event-request",[PageController::class,"event_request"])->name("event_request");
// Audience Auth + Google
Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'show'])->name('login');
    Route::post('/login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'login']);
    Route::get('/register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'show'])->name('register');
    Route::post('/register', [App\Http\Controllers\Frontend\Auth\RegisterController::class, 'register']);

    // Google OAuth
    Route::get('/auth/google', [App\Http\Controllers\Frontend\Auth\GoogleController::class, 'redirect'])->name('google.login');
    Route::get('/auth/google/callback', [App\Http\Controllers\Frontend\Auth\GoogleController::class, 'callback']);
});
// Event Detail + Booking
Route::get('/event/{event:slug}', [App\Http\Controllers\Frontend\EventController::class, 'show'])->name('event.show');

// Protected Booking (after login)
Route::middleware('auth')->group(function () {
    Route::post('/event/{event}/book', [App\Http\Controllers\Frontend\BookingController::class, 'store'])->name('booking.store');
    Route::get('/my-tickets', [App\Http\Controllers\Frontend\BookingController::class, 'myTickets'])->name('my.tickets');
});
