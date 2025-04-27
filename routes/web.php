<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Foro\UploadController;
use App\Http\Controllers\Foro\ForoController;



// Rutas para invitados (no autenticados)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    // Registro
    Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    
    // Login
    Route::get('/login', [LoginController::class, 'showForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    // Foro
    Route::get('/foro/upload', [UploadController::class, 'show'])->name('upload.show');
    Route::get('/', [ForoController::class, 'show'])->name('index');

    Route::post('/foro/upload', [UploadController::class, 'uploadPost'])->name('upload.post');

    // Profile
    Route::get('/profile/me', [ProfileController::class, 'show'])->name('profile.me');
    Route::get('/profile/{user}', [ProfileController::class, 'showUser'])->name('profile.user');
});


