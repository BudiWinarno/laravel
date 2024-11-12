<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [HomeController::class, 'index'])->name('index.index');
Route::get('/create', [HomeController::class, 'create'])->name('index.create');
Route::post('/storesave', [HomeController::class, 'store'])->name('index.store');
Route::delete('/produk/delete{id}', [HomeController::class, 'destroy'])->name('index.destroy');
Route::get('/produk/edit{id}', [HomeController::class, 'edit'])->name('index.edit');
Route::put('/produk/update{id}', [HomeController::class, 'update'])->name('index.update');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});
