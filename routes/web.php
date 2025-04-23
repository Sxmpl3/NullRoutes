<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForoController;
/*
Route::middleware(['guest'])->group(function () {
    Route::get('/', [ForoController::class, 'showLoginForm'])->name('auth.register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ForoController::class, 'dashboard'])->name('home');
    Route::get('/perfil', [ForoController::class, 'profile'])->name('foro.profile');
});
*/

Route::get('/', function () {
    return view('home');   // resources/views/home.blade.php
});


