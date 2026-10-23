<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectronicController;

Route::get('/', [ElectronicController::class, 'home'])->name('home');
Route::get('/produk', [ElectronicController::class, 'index'])->name('electronics.index');
Route::get('/electronics/{id}', [ElectronicController::class, 'show'])->name('electronics.show');
Route::get('/tentang', [ElectronicController::class, 'about'])->name('about');
Route::get('/keranjang', [ElectronicController::class, 'cart'])->name('cart');
Route::get('/keranjang/tambah/{id}', [ElectronicController::class, 'addToCart'])->name('cart.add');
Route::get('/keranjang/hapus/{id}', [ElectronicController::class, 'removeFromCart'])->name('cart.remove');