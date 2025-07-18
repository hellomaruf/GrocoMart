<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as web;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('login', web\LoginController::class);
Route::post('authenticate', [web\LoginController::class, 'authenticate'])->name('authenticate.login');

Route::get('register', [web\LoginController::class, 'register']);
Route::post('register', [web\LoginController::class, 'processRegister'])->name('authenticate.register');
