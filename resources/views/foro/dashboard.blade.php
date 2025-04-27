@extends('layouts.auth')

@section('content')
<div class="max-w-4xl mx-auto p-4">
    <h1 class="text-2xl font-bold text-white mb-6">Bienvenido al Foro, {{ $user->name }}</h1>
    <p class="text-gray-300">Aquí iría el contenido principal del foro.</p>
</div>
@endsection