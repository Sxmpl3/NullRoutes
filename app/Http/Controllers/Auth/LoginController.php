<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de login
     */
    public function showForm()
    {
        return view('auth.login');
    }

    /**
     * Procesa el intento de login
     */
    public function login(Request $request)
    {
        // Validamos los datos que envía el usuario
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Intento de autenticación
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {

            return redirect()->intended('/');
        }

        // Si falla la autenticación
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }
}