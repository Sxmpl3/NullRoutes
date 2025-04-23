@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-6">Tu Perfil</h1>
    <div class="bg-gray-800 p-6 rounded-lg">
        <p class="text-gray-300"><span class="font-semibold">Nombre:</span> {{ $user->name }}</p>
        <p class="text-gray-300 mt-2"><span class="font-semibold">Email:</span> {{ $user->email }}</p>
    </div>
</div>
@endsection