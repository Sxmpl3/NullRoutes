@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold text-white mb-6 text-center">Iniciar sesión</h1>

    <!-- Error general de credenciales -->
    @if('credentials_error')
        <div class="mb-4 p-4 bg-red-800 text-red-100 rounded-lg">El correo electrónico o la contraseña no coinciden</div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-input label="Email" name="email" type="email" :value="old('email')" required />
        </div>
        <div>
            <x-input label="Contraseña" name="password" type="password" required />
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-200">
            Iniciar sesión
        </button>
    </form>

</div>
@endsection