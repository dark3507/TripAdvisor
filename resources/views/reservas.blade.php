<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style_reservas.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

    <!-- Barra de navegación -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-green-600">TripAdvisor</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/destinos" class="text-gray-700 hover:text-green-600">Destinos</a>
                    <a href="/actividades" class="text-gray-700 hover:text-green-600">Actividades</a>
                    <a href="/restaurantes" class="text-gray-700 hover:text-green-600">Restaurantes</a>
                    <a href="/reservas" class="text-green-600 font-medium">Mis Reservas</a>
                    <a href="{{ url('/sesion') }}">
                        <div class="h-8 w-8 rounded-full bg-green-600 flex items-center justify-center text-white font-bold">
                            <span>JP</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Mis Reservas</h1>

        <!-- Lista de reservas -->
        <div class="space-y-6">

            <!-- Reserva -->
            <div class="reserva-card bg-white rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Tour por los parques temáticos</h2>
                        <p class="text-gray-600 text-sm">Lugar: Orlando, Florida</p>
                        <p class="text-gray-600 text-sm">Fecha de reserva: 20/08/2025</p>
                        <p class="text-gray-600 text-sm">Cantidad de personas: 4</p>
                        <p class="text-gray-600 text-sm">Precio: $120</p>
                        <span class="estado-reserva bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">Pagado</span>
                    </div>
                    <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                        Cancelar
                    </button>
                </div>
            </div>

            <!-- Otra reserva -->
            <div class="reserva-card bg-white rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Paseo en globo aerostático</h2>
                        <p class="text-gray-600 text-sm">Lugar: Orlando, Florida</p>
                        <p class="text-gray-600 text-sm">Fecha de reserva: 25/08/2025</p>
                        <p class="text-gray-600 text-sm">Cantidad de personas: 2</p>
                        <p class="text-gray-600 text-sm">Precio: $250</p>
                        <span class="estado-reserva bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-medium">Pendiente de pago</span>
                    </div>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">
                        Pagar ahora
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm mb-4">
                © 2025 Tripadvisor LLC Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>
</html>
