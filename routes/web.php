<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/datatable', function () {
    return view('admin.categories.datatable');
});

Route::get('/datatable/get-list', [CategoriesController::class, 'index']);
