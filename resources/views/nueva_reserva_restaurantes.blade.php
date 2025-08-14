<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Reserva - Restaurantes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style_reserva_nueva_restaurantes.css') }}" rel="stylesheet">
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
                    <a href="/restaurantes" class="text-green-600 font-medium">Restaurantes</a>
                    <a href="/reservas" class="text-gray-700 hover:text-green-600">Mis Reservas</a>
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
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Reservar Mesa</h1>

        <form class="bg-white rounded-lg shadow-sm p-6 space-y-6">

            <!-- Seleccionar Restaurante -->
            <div>
                <label for="restaurante" class="block font-medium text-gray-700 mb-1">Restaurante</label>
                <select id="restaurante" name="id_restaurante" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <option value="">Selecciona un restaurante</option>
                    <option value="1">La Casa del Sabor</option>
                    <option value="2">El Bistró Gourmet</option>
                    <option value="3">Mariscos del Pacífico</option>
                </select>
            </div>

            <!-- Cantidad de personas -->
            <div>
                <label for="cantidad_personas" class="block font-medium text-gray-700 mb-1">Cantidad de personas</label>
                <input type="number" id="cantidad_personas" name="cantidad_personas" min="1" value="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- Fecha de reserva -->
            <div>
                <label for="fecha_reserva" class="block font-medium text-gray-700 mb-1">Fecha de reserva</label>
                <input type="date" id="fecha_reserva" name="fecha_reserva" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- Hora de reserva -->
            <div>
                <label for="hora_reserva" class="block font-medium text-gray-700 mb-1">Hora de reserva</label>
                <input type="time" id="hora_reserva" name="hora_reserva" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- Método de pago -->
            <div>
                <label for="metodo_pago" class="block font-medium text-gray-700 mb-1">Método de pago</label>
                <select id="metodo_pago" name="id_metodo_pago" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <option value="">Selecciona un método de pago</option>
                    <option value="1">Tarjeta de Crédito</option>
                    <option value="2">PayPal</option>
                    <option value="3">Pago en efectivo</option>
                </select>
            </div>

            <!-- Botón de reservar -->
            <div class="flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md">
                    Confirmar Reserva
                </button>
            </div>

        </form>
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8 mt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm mb-4">
                © 2025 Tripadvisor LLC Todos los derechos reservados.
            </div>
        </div>
    </footer>

</body>
</html>
