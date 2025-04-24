<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showForm()
    {
        return view('auth.login');
    }

    // Maneja el inicio de sesión
    public function login(Request $request)
    {
        // Validamos los datos que envía el usuario
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Intento de autenticación
        $email = User::where('email', $request->email)->first();
        $password = User::where('password', $request->name)->first();

        if ($email || $password) {
            return view('home');
        }

        // Si falla la autenticación
        return back()->withErrors([
            'credentials_error' => 'El correo electrónico o la contraseña son incorrectos.',
        ]);
    }
}