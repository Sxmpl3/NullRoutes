@extends('layouts.auth')

@section('content')

<div class="text-center">
    <img src="{{ asset('images/logoblanco.webp') }}"
        alt="NullRoutes Logo"
        width="500"
        height="auto">
    
    
    <div class="flex justify-center space-x-4">
        <a href="{{ route('login') }}" 
           class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition duration-200">
            Iniciar sesión
        </a>
        
        <a href="{{ route('register') }}" 
           class="px-6 py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition duration-200">
            Registrarse
        </a>
    </div>
</div>
@endsection