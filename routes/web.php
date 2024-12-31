<?php

use App\Http\Controllers;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->name('user.login');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [Controllers\UserController::class, 'logout'])->name('user.logout');

    Route::get('/dashboard', [Controllers\UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/books/list', [Controllers\BookController::class, 'list'])->name('books.list');
    Route::middleware(IsAdmin::class)->group(function () {
        Route::get('/books/category', [Controllers\BookController::class, 'recapCategory'])->name('books.category');
        Route::get('/books/publisher', [Controllers\BookController::class, 'recapPublisher'])->name('books.publisher');
        Route::resource('books', Controllers\BookController::class);
    });
});
