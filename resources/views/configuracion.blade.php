<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Configuración de la cuenta - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 font-sans">

    <!-- Barra de navegación simplificada -->
    <nav class="bg-white shadow-sm mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <span class="text-xl font-bold text-green-600 cursor-pointer">TripAdvisor</span>
            <a href="/inicio" class="text-green-600 hover:underline font-semibold">Inicio</a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 bg-white p-8 rounded-lg shadow-md">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Configuración de la cuenta</h1>

        <form action="#" method="POST" class="space-y-6">
            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" value="Juan Pérez" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" id="email" name="email" value="juan.perez@example.com" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
            </div>

            <!-- Contraseña -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Nueva contraseña</label>
                <input type="password" id="password" name="password" placeholder="********" class="mt-1 block w-full border border-gray-300 rounded-md p-2" />
                <p class="text-xs text-gray-500 mt-1">Deja vacío si no deseas cambiarla</p>
            </div>

            <!-- Notificaciones -->
            <div class="flex items-center">
                <input type="checkbox" id="notificaciones" name="notificaciones" checked class="h-4 w-4 text-green-600 border-gray-300 rounded" />
                <label for="notificaciones" class="ml-2 block text-sm text-gray-700">Recibir notificaciones por email</label>
            </div>

            <div>
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700 font-semibold">Guardar cambios</button>
            </div>
        </form>

    </main>

</body>
</html>
