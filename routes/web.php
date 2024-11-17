<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\GalleryController;

// User
Route::get('/', [IndexController::class, 'index'])->name('index');
//User - Tour
Route::get('/tour/{slug}', [IndexController::class, 'tour'])->name('tour');
Route::get('/detail-tour/{slug}', [IndexController::class, 'detail_tour'])->name('detail-tour');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// // Admmin
//Admmin - Categories
Route::resource('categories', CategoriesController::class);

Route::get('/categories/list', [CategoriesController::class, 'getCategories'])->name('categories.list');

//Admmin - Tours
Route::resource('tours', ToursController::class);

// //Admmin - Tours/Gallery
Route::resource('gallery', GalleryController::class);


