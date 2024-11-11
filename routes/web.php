<?php

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
