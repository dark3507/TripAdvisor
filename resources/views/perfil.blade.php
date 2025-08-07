<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perfil de Usuario - Juan Pérez</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 font-sans min-h-screen flex flex-col">

    <!-- Contenedor principal -->
    <div class="max-w-7xl mx-auto p-6 flex-grow">

        <!-- Header perfil -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=128&q=80" alt="Foto de perfil" class="w-24 h-24 rounded-full object-cover shadow-md" />
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Juan Pérez</h1>
                    <p class="text-gray-500">@juanperez</p>
                </div>
            </div>
            <button class="border border-gray-300 rounded px-4 py-2 hover:bg-gray-100 text-gray-700 font-semibold">Editar perfil</button>
        </div>

        <!-- Estadísticas -->
        <div class="flex space-x-12 text-gray-700 mb-6">
            <div class="text-center">
                <p class="font-semibold text-lg">0</p>
                <p class="text-sm">Aportes</p>
            </div>
            <div class="text-center">
                <p class="font-semibold text-lg">0</p>
                <p class="text-sm">Seguidores</p>
            </div>
            <div class="text-center">
                <p class="font-semibold text-lg">0</p>
                <p class="text-sm">Siguiendo</p>
            </div>
        </div>

        <!-- Menú tabs -->
        <nav class="border-b border-gray-300 mb-6">
            <ul class="flex space-x-6 text-gray-600 font-semibold">
                <li class="border-b-2 border-green-600 pb-2">Actualización de actividades</li>
                <li class="hover:text-green-600 cursor-pointer">Viajes</li>
                <li class="hover:text-green-600 cursor-pointer">Fotos</li>
                <li class="hover:text-green-600 cursor-pointer">Opiniones</li>
                <li class="hover:text-green-600 cursor-pointer">Foros</li>
                <li class="hover:text-green-600 cursor-pointer">Mapa de viajes</li>
            </ul>
        </nav>

        <div class="flex space-x-6">

            <!-- Izquierda: Logros, introducción, consejos -->
            <div class="w-1/3 space-y-6">

                <!-- Logros -->
                <div class="bg-white p-4 rounded shadow-sm">
                    <h2 class="font-bold mb-3">Tus Logros</h2>
                    <p class="mb-4 text-gray-600">Comienza a compartir para acceder a los hitos</p>
                    <button class="w-full bg-green-900 text-white rounded py-2 mb-4 hover:bg-green-800 font-semibold">Ver todo</button>
                    <div class="space-y-2 text-gray-700 text-sm">
                        <div class="border border-gray-300 rounded p-3 flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-.896 2-2 2-2-.896-2-2z"/></svg>
                            <div>
                                <p class="font-semibold">Escribe tu primera opinión</p>
                                <p class="text-xs text-gray-500">Accede a los Niveles de opiniones</p>
                            </div>
                        </div>
                        <div class="border border-gray-300 rounded p-3 flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/></svg>
                            <div>
                                <p class="font-semibold">Carga tu primera foto</p>
                                <p class="text-xs text-gray-500">Accede a los Niveles de fotos</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Introducción -->
                <div class="bg-white p-4 rounded shadow-sm text-gray-700 text-sm">
                    <h2 class="font-bold mb-3">Introducción</h2>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:text-green-600"><span class="font-bold mr-1">+</span> Agrega tu ciudad actual</li>
                        <li class="cursor-pointer hover:text-green-600"><span class="font-bold mr-1">+</span> Se unió en jun 2025</li>
                        <li class="cursor-pointer hover:text-green-600"><span class="font-bold mr-1">+</span> Agrega un sitio web</li>
                        <li class="cursor-pointer hover:text-green-600"><span class="font-bold mr-1">+</span> Escribe algunos detalles sobre ti</li>
                    </ul>
                </div>

                <!-- Consejos -->
                <div class="bg-white p-4 rounded shadow-sm text-gray-700 text-sm">
                    <h2 class="font-bold mb-3">Comparte tus consejos sobre viajes</h2>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:text-green-600 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4a1 1 0 001 1h3M7 7h10M7 7V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7v10a2 2 0 002 2h6a2 2 0 002-2v-4M7 17h10"/></svg>
                            <span>Publicar fotos</span>
                        </li>
                        <li class="cursor-pointer hover:text-green-600 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h.01M12 15h.01M9 12h.01M12 12v.01"/></svg>
                            <span>Escribir opinión</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Derecha: espacio para agregar más info o vacío -->
            <div class="flex-1 bg-white rounded shadow-sm p-8 text-center text-gray-400 font-semibold">
                Agrégale más a tu perfil<br />
                <small>Agrega fotos e información a tu perfil para que los usuarios puedan encontrarte fácilmente y conocerte más</small>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-gray-100 border-t border-gray-300 py-4 text-xs text-gray-500 text-center max-w-7xl mx-auto w-full">
        <p>© 2025 Tripadvisor LLC Todos los derechos reservados.</p>
        <div class="flex justify-center space-x-4 mt-2">
            <a href="#" class="hover:underline">Condiciones de uso</a>
            <a href="#" class="hover:underline">Declaración de privacidad y de cookies</a>
            <a href="#" class="hover:underline">Consentimiento de cookie</a>
            <a href="#" class="hover:underline">Mapa del sitio</a>
            <a href="#" class="hover:underline">Cómo funciona el sitio</a>
            <a href="#" class="hover:underline">Contáctanos</a>
            <a href="#" class="hover:underline">Declaración de accesibilidad</a>
        </div>
    </footer>

</body>
</html>
