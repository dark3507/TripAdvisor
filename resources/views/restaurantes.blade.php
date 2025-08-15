<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes en Orlando - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style_restaurantes.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

    <!-- Barra de navegación -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                   <a href="{{ url('/sesion') }}" class="text-xl font-bold text-green-600">
    TripAdvisor
</a>

                </div>
                <div class="flex items-center space-x-4">
                    <a href="/destinos" class="text-gray-700 hover:text-green-600">Destinos</a>
                    <a href="/actividades" class="text-gray-700 hover:text-green-600">Actividades</a>
                    <a href="/restaurantes" class="text-green-600 font-medium">Restaurantes</a>
                    <a href="/hoteles" class="text-gray-600 font-medium">Hoteles</a>
                    <a href="/viajes" class="text-gray-700 hover:text-green-600">Mis Viajes</a>
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
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Los restaurantes más populares</h1>
        
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Columna de filtros / información de reserva -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4 space-y-6">
                    
                    <!-- Tipo de comida -->
                    <div>
                        <h2 class="font-bold text-lg mb-3">Tipo de cocina</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600" checked>
                                <span class="ml-2">Italiana</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600" checked>
                                <span class="ml-2">Mexicana</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Japonesa</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Caribeña</span>
                            </label>
                        </div>
                    </div>

                    <!-- Rango de precios -->
                    <div>
                        <h2 class="font-bold text-lg mb-3">Rango de precios</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Económico</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600" checked>
                                <span class="ml-2">Gama media</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Lujo</span>
                            </label>
                        </div>
                    </div>

                    <!-- Servicios -->
                    <div>
                        <h2 class="font-bold text-lg mb-3">Servicios</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600" checked>
                                <span class="ml-2">WiFi gratis</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Reservación previa</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-green-600">
                                <span class="ml-2">Opciones veganas</span>
                            </label>
                        </div>
                    </div>

                </div>
            </aside>

            <!-- Columna de resultados -->
            <div class="lg:w-3/4 space-y-6">

                <!-- Restaurante 1 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?crop=entropy&cs=tinysrgb&fit=max&w=800&q=80" alt="Tabla Indian Restaurant Lake Nona" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800">Tabla Indian Restaurant Lake Nona</h2>
                        <div class="flex items-center mt-1">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.6 (63 opiniones)</span>
                        </div>
                        <div class="text-gray-600 mt-2">
                            De la India, Asiática · $$--$$$ · <span class="text-green-600">Abierto ahora</span>
                        </div>
                        <div class="mt-4">
                            <a href="{{ url('/nueva_reserva_restaurantes') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">Reservar</a>
                        </div>
                    </div>
                </div>

                <!-- Restaurante 2 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?crop=entropy&cs=tinysrgb&fit=max&w=800&q=80" alt="Café Tu Tu Tango" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800">Café Tu Tu Tango</h2>
                        <div class="flex items-center mt-1">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.4 (2,601 opiniones)</span>
                        </div>
                        <div class="text-gray-600 mt-2">
                            Mexicano, Estadounidense · $$--$$$ · <span class="text-green-600">Abierto ahora</span>
                        </div>
                        <div class="mt-4">
                            <a href="{{ url('/nueva_reserva_restaurantes') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">Reservar</a>
                        </div>
                    </div>
                </div>

                <!-- Restaurante 3 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?crop=entropy&cs=tinysrgb&fit=max&w=800&q=80" alt="O'Kenan Restaurant" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800">O'Kenan Restaurant</h2>
                        <div class="flex items-center mt-1">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.6 (853 opiniones)</span>
                        </div>
                        <div class="text-gray-600 mt-2">
                            Latina, Venezolana · $ · <span class="text-green-600">Abierto ahora</span>
                        </div>
                        <div class="mt-4">
                            <a href="{{ url('/nueva_reserva_restaurantes') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">Reservar</a>
                        </div>
                    </div>
                </div>

                <!-- Restaurante 4 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?crop=entropy&cs=tinysrgb&fit=max&w=800&q=80" alt="Sofrito Restaurant" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-800">Sofrito Restaurant</h2>
                        <div class="flex items-center mt-1">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 ml-2">4.3 (412 opiniones)</span>
                        </div>
                        <div class="text-gray-600 mt-2">
                            Caribeño, Latino · $$--$$$ · <span class="text-green-600">Abierto ahora</span>
                        </div>
                        <div class="mt-4">
                            <a href="{{ url('/nueva_reserva_restaurantes') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">Reservar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
            © 2025 Tripadvisor LLC Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>
