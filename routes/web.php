<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/loginReq',[AuthController::class,'loginReq'])->name('loginReq');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerReq',[AuthController::class,'registerReq'])->name('registerReq');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home',[ProductController::class,'index'])->name('home');
    Route::get('/add',[ProductController::class,'add'])->name('add');
    Route::post('/addReq',[ProductController::class,'addReq'])->name('addReq');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::post('/editReq',[ProductController::class,'editReq'])->name('editReq');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('delete');
});

