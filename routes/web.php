<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
   });

Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('destroy');
Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
Route::put('/update/{user}', [UserController::class, 'update'])->name('update');