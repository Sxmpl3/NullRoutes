<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Foro\ForoController;

// Ruta de inicio PÚBLICA (accesible sin autenticación)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rutas para invitados (no autenticados)
Route::middleware('guest')->group(function () {
    // Registro
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    
    // Login
    Route::get('/login', [LoginController::class, 'showForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});
