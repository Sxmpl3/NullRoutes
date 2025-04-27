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
</head>

<body class="bg-dark-900 text-gray-100 min-h-screen flex flex-col">

    <!-- Header superior
    <header class="bg-dark-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="text-2xl font-bold text-white">
                {{ config('app.name', 'Foro') }}
            </div>
            <nav class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition">Inicio</a>
                <a href="{{ route('forums.index') }}" class="hover:text-blue-400 transition">Foros</a>
                <a href="{{ route('profile.show', auth()->user()->id) }}" class="hover:text-blue-400 transition">Mi perfil</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-red-400 transition">Salir</button>
                </form>
            </nav>
        </div>
    </header> -->

    <!-- Header superior -->
    <header class="bg-dark-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="text-2xl font-bold text-white">
                {{ config('app.name', 'Foro') }}
            </div>
            <nav class="flex items-center space-x-6">
                <a href="/" class="hover:text-blue-400 transition">Inicio</a>
                <a href="/forums" class="hover:text-blue-400 transition">Foros</a>
                <a href="/profile" class="hover:text-blue-400 transition">Mi perfil</a>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-red-400 transition">Salir</button>
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
