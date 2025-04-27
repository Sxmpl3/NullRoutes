@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <!-- Mostrar el mensaje de éxito -->
    @if(session('success'))
        <div id="success-message" class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg text center">
            {{ session('success') }}
        </div>

        <style>
            #success-message {
                transition: opacity 0.5s ease-out;
            }
        </style>

        <script>
            // Espera 3 segundos (3000 milisegundos) y luego comienza la animación
            setTimeout(function() {
                var message = document.getElementById('success-message');
                if (message) {
                    message.style.opacity = 0;  // Cambia la opacidad a 0 (desaparece gradualmente)
                    setTimeout(function() {
                        message.style.display = 'none'; // Luego oculta el mensaje completamente después de la animación
                    }, 500); // Espera el tiempo de la animación antes de ocultarlo
                }
            }, 3000);
        </script>
    @endif

    <!-- Contenedor de posts -->
    <div class="space-y-6 mt-10">
        @foreach($posts as $post)
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg">
                <div class="flex items-center justify-between space-x-4">
                    <!-- Foto de perfil -->
                    <div class="flex-shrink-0">
                        @if($post->user->profile_photo && file_exists(public_path('storage/profile_photos/' . $post->user->profile_photo)))
                            <img src="{{ asset('storage/profile_photos/' . $post->user->profile_photo) }}" 
                                alt="Foto de perfil" 
                                class="rounded-full w-16 h-16 object-cover">
                        @else
                            <div class="w-16 h-16 bg-gray-700 flex items-center justify-center rounded-full">
                                <span class="text-3xl text-gray-400 font-bold">
                                    {{ strtoupper(substr($post->user->username, 0, 1)) }}
                                </span>
                            </div>
                        @endif
                    </div>

                    <!-- Título del post -->
                    <div class="flex-1 text-center">
                        <h3 class="font-semibold text-lg text-white">{{ $post->nombre_post }}</h3>
                    </div>
                    
                    <div class="text-right">
                        <span>{{ $post->created_at->format('d/m/Y') }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="mt-6 text-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
