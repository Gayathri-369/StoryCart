<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('home.index'); // points to resources/views/home/index.blade.php
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books/{id}/add-to-cart', [BookController::class, 'addToCart'])->name('books.addToCart');

