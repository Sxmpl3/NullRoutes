<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Foro') }} - @yield('title', 'Perfil')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Estilos personalizados -->
    <style>
        .logo-nullroutes {
            height: 25%;
            width: 25%;
            object-fit: contain;
        }
    </style>
</head>

<body class="bg-dark-900 text-gray-100 min-h-screen flex flex-col">

<!-- Header superior -->
<header class="bg-dark-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between">
        <!-- LOGO -->
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('images/logoblanco.webp') }}" 
                 alt="NullRoutes Logo"
                 class="logo-nullroutes"> 
        </a>

        <!-- NAVIGATION -->
        <nav class="flex items-center space-x-8 text-base font-medium">
            <a href="{{ route('index') }}" class="hover:text-blue-400 transition">Inicio</a>
            <a href="{{ route('profile.me') }}" class="hover:text-blue-400 transition">Perfil</a>
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit" class="hover:text-red-400 transition">Cerrar sesión</button>
            </form>
        </nav>
    </div>
</header>

<!-- Contenido principal -->
<main class="flex-1">
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-dark-800 mt-10 py-6 text-center text-sm text-gray-500">
    &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
</footer>

</body>
</html>
