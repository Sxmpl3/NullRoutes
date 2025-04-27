@extends('layouts.app')

@section('title', 'Crear Post')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-3xl font-bold text-white mb-8 text-center">Crear Nuevo Post</h1>

    <form action="{{ route('upload.post') }}" method="POST" class="bg-gray-800 p-8 rounded-xl shadow-lg space-y-6">
        @csrf

        <!-- Nombre del Post -->
        <div>
            <label for="title" class="block text-sm font-semibold text-gray-300 mb-2">Título del Post</label>
            <input type="text" name="title" id="title" 
                   class="w-full bg-dark-900 border border-gray-700 rounded-lg p-3 text-white focus:outline-none focus:border-blue-500"
                   required>
        </div>

        <!-- Contenido del Post -->
        <div>
            <label for="content" class="block text-sm font-semibold text-gray-300 mb-2">Contenido</label>
            <textarea name="content" id="content" rows="8"
                      class="w-full bg-dark-900 border border-gray-700 rounded-lg p-3 text-white resize-none focus:outline-none focus:border-blue-500"
                      required></textarea>
        </div>

        <!-- Botón de Enviar -->
        <div class="text-center">
            <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                Publicar Post
            </button>
        </div>
    </form>
</div>
@endsection
