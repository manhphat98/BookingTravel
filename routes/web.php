<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ToursController;

// User
Route::get('/', [HomeController::class, 'index'])->name('index');
//User - Tour
Route::get('/tour/{slug}', [HomeController::class, 'tour'])->name('tour');
Route::get('/detail-tour/{slug}', [HomeController::class, 'detail_tour'])->name('detail-tour');


// Admmin
Route::get('/admin', [AdminController::class, 'index'])->name('home');
Auth::routes();
//Admmin - Categories
Route::resource('categories', CategoriesController::class);

// Route::get('/categories/list', [CategoriesController::class, 'getCategories'])->name('categories.list');

//Admmin - Tours
Route::resource('tours', ToursController::class);
