<?php

use App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->name('user.login');
Route::get('/logout', [Controllers\UserController::class, 'logout'])->name('user.logout');

Route::get('/dashboard', [Controllers\UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/books/category', [Controllers\BookController::class, 'recapCategory'])->name('books.category');
Route::get('/books/publisher', [Controllers\BookController::class, 'recapPublisher'])->name('books.publisher');
Route::resource('books', Controllers\BookController::class);
