<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{   
    // Muestra el formulario de registro
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users', // Validación de username
            'email' => 'required|string|email|max:255|unique:users', // Validación de email
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Creación del usuario
        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'rol' => 0,
        ]);

        // Autenticación y redirección
        auth()->login($user);
        return redirect()->route('index')->with('success', '¡Registro exitoso!');
    }
}