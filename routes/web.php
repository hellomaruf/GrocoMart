<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as web;
// use App\Http\Controllers\web\AdminDashboardController;

Route::get('/', function () {
    return view('landing');
});
Route::resource('login', web\LoginController::class);
Route::get('logout', [web\LoginController::class, 'logout'])->name('account.logout');
Route::post('authenticate', [web\LoginController::class, 'authenticate'])->name('authenticate.login');

Route::get('register', [web\LoginController::class, 'register']);
Route::post('register', [web\LoginController::class, 'processRegister'])->name('authenticate.register');

Route::resource('admin/dashboard', web\AdminDashboardController::class);

