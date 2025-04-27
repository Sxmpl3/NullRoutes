@extends('layouts.general')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-white mb-8 text-center">Perfil de Usuario</h1>

    <div class="bg-gray-800 p-8 rounded-2xl shadow-lg flex flex-col items-center">
        <!-- Imagen de perfil -->
        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-500 mb-6">
            @if($user->profile_photo && file_exists(public_path('storage/profile_photos/' . $user->profile_photo)))
                <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" 
                     alt="Foto de perfil" 
                     class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-gray-700 flex items-center justify-center">
                    <span class="text-4xl text-gray-400 font-bold">
                        {{ strtoupper(substr($user->username, 0, 1)) }}
                    </span>
                </div>
            @endif
        </div>

        <!-- Datos del usuario -->
        <div class="text-center">
            <p class="text-2xl font-bold text-white">{{ $user->username }}</p>
            <p class="text-gray-500 mt-4 text-sm">Miembro desde: {{ $user->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>
@endsection