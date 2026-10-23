<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;

Route::get('/', [ElectronicController::class, 'home'])->name('home');
Route::get('/produk', [ElectronicController::class, 'index'])->name('electronics.index');
Route::get('/electronics/{id}', [ElectronicController::class, 'show'])->name('electronics.show');
Route::get('/tentang', [ElectronicController::class, 'about'])->name('about');
Route::get('/electronics/{id}', [ElectronicController::class, 'show'])
    ->name('electronics.show');