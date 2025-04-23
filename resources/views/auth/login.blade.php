@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold text-white mb-6 text-center">Iniciar sesión</h1>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <x-input label="Email" name="email" type="email" :value="old('email')" required />
        <x-input label="Contraseña" name="password" type="password" required />

        <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-200">
            Iniciar sesión
        </button>
    </form>

    <div class="mt-6 text-center">
        <a href="{{ route('register') }}" class="text-sm text-blue-400 hover:text-blue-300">
            ¿No tienes una cuenta? Regístrate
        </a>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="block mt-2 text-sm text-blue-400 hover:text-blue-300">
                ¿Olvidaste tu contraseña?
            </a>
        @endif
    </div>
</div>
@endsection