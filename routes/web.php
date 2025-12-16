<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthController::class,'loginForm'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'registerForm'])->name('register.form');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::middleware('auth')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('home');
    Route::get('/user/foods',[UserController::class,'foods'])->name('user.foods');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});
