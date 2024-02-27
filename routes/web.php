<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use app\Http\Controllers\BeveragesController;
use app\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/addCategory', [CategoryController::class, 'create'])->name('addCategory');
Route::post('/addCategory', [CategoryController::class, 'store'])->name('addCategory');
Route::get('/editCategory/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::post('/editCategory/{id}', [CategoryController::class, 'update'])->name('editCategory');

