<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as web;

// Route::group(['middleware' => 'guest'], function(){
// });
Route::get('/', function () {
    return view('landing');
});
Route::resource('login', web\LoginController::class);
Route::post('authenticate', [web\LoginController::class, 'authenticate'])->name('authenticate.login');
Route::get('register', [web\LoginController::class, 'register']);
Route::post('register', [web\LoginController::class, 'processRegister'])->name('authenticate.register');

Route::group(['prefix' => 'admin', 'middleware' => ['adminCheck']], function () {
    Route::get('logout', [web\LoginController::class, 'logout'])->name('account.logout');
    Route::resource('dashboard', web\AdminDashboardController::class);

    Route::resource('product-list', web\ProductsController::class);

});


