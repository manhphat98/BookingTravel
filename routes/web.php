<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\Auth\LoginController;

// User
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/introduce', [IndexController::class, 'introduce'])->name('introduce');
//User - Tour
Route::get('/tour/{slug}', [IndexController::class, 'tour'])->name('tour');
Route::get('/detail-tour/{slug}', [ToursController::class, 'show'])->name('detail-tour');
//User - Filter
Route::get('/tours/filter', [IndexController::class, 'filter'])->name('tours.filter');
//User - Residence
Route::get('/residence', [IndexController::class, 'residence'])->name('residence');
Route::get('/detail-residence/{slug}', [ResidenceController::class, 'show'])->name('detail-residence');
//User - Vehicle
Route::get('/vehicle', [IndexController::class, 'vehicle'])->name('vehicle');
Route::get('/detail-vehicle/{slug}', [VehicleController::class, 'show'])->name('detail-vehicle');


//User - Booking
Route::get('/payment/{id}', [BookingController::class, 'payment'])->name('payment');
Route::post('/vnpay', [BookingController::class, 'vnpay'])->name('payment.vnpay');
Route::post('/checkout', [BookingController::class, 'checkout'])->name('checkout');
Route::get('/booking/export/{id}', [BookingController::class, 'export'])->name('booking.export');


Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('admin', [HomeController::class, 'index'])->name('admin');
    //Admmin - Categories
    Route::resource('categories', CategoriesController::class);

    //Admmin - Tours
    Route::resource('tours', ToursController::class);

    //Admmin - Residence
    Route::resource('residences', ResidenceController::class);
    //Admmin - Vehicle
    Route::resource('vehicles', VehicleController::class);

    // //Admmin - Tours/Gallery
    Route::resource('gallery', GalleryController::class);

    //Admmin - Booking
    Route::resource('bookings', BookingController::class);
    Route::get('/bookings', [BookingController::class, 'index'])->name('booking.index');
});


