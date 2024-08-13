<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[UserController::class,'registerView'])->name('register.view');
Route::post('registerpost',[UserController::class,'register'])->name('register');
Route::get('/login',[UserController::class,'loginview'])->name('login');
Route::post('/loginMatch',[UserController::class,'login'])->name('loginMatch');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[UserController::class,'logout'])->name('logout');