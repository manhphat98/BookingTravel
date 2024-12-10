<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BookingController;

// User
Route::get('/', [IndexController::class, 'index'])->name('index');
//User - Tour
Route::get('/tour/{slug}', [IndexController::class, 'tour'])->name('tour');
Route::get('/detail-tour/{slug}', [IndexController::class, 'detail_tour'])->name('detail-tour');
//User - Booking
Route::get('/checkout/{id}', [BookingController::class, 'checkout'])->name('checkout');
Route::post('/payment', [BookingController::class, 'payment'])->name('payment');

Route::get('/payment/counter/{tour_id}', [BookingController::class, 'counter'])->name('payment.counter');

Route::post('/vnpay', [BookingController::class, 'vnpay'])->name('payment.vnpay');
Route::get('/payment/momo/{tour_id}', [BookingController::class, 'momo'])->name('payment.momo');
Route::get('/payment/bank/{tour_id}', [BookingController::class, 'bank'])->name('payment.bank');

// Callback route xử lý sau khi thanh toán thành công
Route::get('/payment/success', [BookingController::class, 'success'])->name('payment.success');

//User - Filter
Route::get('/filter-tours', [TourController::class, 'filterTours'])->name('tours.filter');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// // Admmin
//Admmin - Categories
Route::resource('categories', CategoriesController::class);

//Admmin - Tours
Route::resource('tours', ToursController::class);

// //Admmin - Tours/Gallery
Route::resource('gallery', GalleryController::class);

//Admmin - Booking
Route::get('/bookings', [BookingController::class, 'index'])->name('booking.index');


