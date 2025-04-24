<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{   
    // Muestra el formulario en caso de no estar autenticado
    public function showForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validamos los datos que envia el usuario
        $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Creamos el usuario en la base de datos
        $exist_email = User::where('email', $request->email)->first();
        $exist_user = User::where('user', $request->name)->first();
        if (!$exist_email || !$exist_user) {
            return back()->with('toast', 'Ese usuario o correo ya esta registraado.');
        }
        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encriptación a base64
        ]);

        // Autenticamos al usuario
        auth()->login($user);

        // Redirigimos al usuario a la pagina de inicio
        return redirect()->intended('/');
    }
}
