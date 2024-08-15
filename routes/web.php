<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tour/{slug}', [HomeController::class, 'tour'])->name('tour');
Route::get('/detail-tour/{slug}', [HomeController::class, 'detail_tour'])->name('detail-tour');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Categories
Route::resource('categories', CategoriesController::class);
