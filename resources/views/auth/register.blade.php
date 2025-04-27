@extends('layouts.auth')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold text-white mb-6 text-center">Crear cuenta</h1>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <x-input label="Nombre" name="name" :value="old('name')" required />
        @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <x-input label="Apellidos" name="apellidos" :value="old('apellidos')" required />
        @error('apellidos')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        <x-input label="Usuario" name="username" :value="old('username')" required />
        @error('username')
            <p class="text-red-500 text-sm mt-1">Este nombre de usuario ya está registrado</p>
        @enderror

        <x-input label="Email" name="email" type="email" :value="old('email')" required />
        @error('email')
            <p class="text-red-500 text-sm mt-1">Este correo electrónico ya está en uso</p>
        @enderror

        <x-input label="Contraseña" name="password" type="password" required autocomplete="new-password" />
        @error('password')
            <p class="text-red-500 text-sm mt-1">Las contraseñas no coinciden</p>
        @enderror

        <x-input label="Repite la contraseña" name="password_confirmation" type="password" required />
            
        <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-200">
            Registrarme
        </button>
    </form>

    <div>
        <p class="mt-4 text-center text-gray-400">
            ¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Inicia sesión</a>
        </p>
    </div>
@endsection