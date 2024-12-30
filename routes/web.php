<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'create'])->name('user.create');
Route::post('/login', [LoginController::class, 'authenticate'])->name('user.login');
