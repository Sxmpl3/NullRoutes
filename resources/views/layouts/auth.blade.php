<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
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
<body class="bg-dark-900 min-h-screen">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-dark-800 p-8 rounded-lg shadow-xl w-full max-w-md border border-gray-700">

            <!-- Logo o título -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-white"></h1>
            </div>

            <!-- Contenido de la vista -->
            @yield('content')

        </div>
    </div>

</body>
</html>