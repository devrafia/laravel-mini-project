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

Route::get('/dashboard', [Controllers\UserController::class, 'dashboard'])->name('user.dashboard');
Route::resource('books', Controllers\BookController::class);
