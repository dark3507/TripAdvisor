<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles en Orlando - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style_hoteles.css') }}" rel="stylesheet">
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
                    <a href="/hoteles" class="text-green-600 font-medium">Hoteles</a>
                    <a href="/viajes" class="text-gray-700 hover:text-green-600">Mis Viajes</a>
                    <!-- Avatar usuario -->
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
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Hoteles destacados en Orlando</h1>
        
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Filtros -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4">
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Tipo de alojamiento</h2>
                        <div class="space-y-2">
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600" checked><span class="ml-2">Hoteles</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Resorts</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Hostales</span></label>
                        </div>
                    </div>

                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Rango de precios</h2>
                        <div class="space-y-2">
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Económico</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600" checked><span class="ml-2">Gama media</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Lujo</span></label>
                        </div>
                    </div>

                    <div class="filter-section">
                        <h2 class="font-bold text-lg mb-3">Servicios</h2>
                        <div class="space-y-2">
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600" checked><span class="ml-2">WiFi gratis</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Piscina</span></label>
                            <label class="flex items-center"><input type="checkbox" class="form-checkbox text-green-600"><span class="ml-2">Desayuno incluido</span></label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Resultados -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                    <span class="text-gray-600">1,245 resultados</span>
                </div>

                <!-- Hotel 1 -->
                <div class="hotel-card bg-white rounded-lg shadow-sm p-6 mb-6 relative">
                    <div class="sponsored-badge text-xs font-medium px-2 py-1 rounded absolute top-4 right-4">Patrocinado</div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Disney's Grand Floridian Resort & Spa</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.7 (3,210 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>Lujo</span> · <span>$$$</span> · <span class="text-green-600">Disponible</span>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="text-blue-600 hover:underline">Ver detalles</a>
                            </div>
                        </div>
                        <a href="{{ url('/nueva_reserva_hoteles') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
                            Reservar
                        </a>
                    </div>
                </div>

                <!-- Hotel 2 -->
                <div class="hotel-card bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Holiday Inn Resort Orlando Suites</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.3 (2,001 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>Gama media</span> · <span>$$</span> · <span class="text-green-600">Disponible</span>
                            </div>
                        </div>
                        <a href="{{ url('/nueva_reserva_hoteles') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
                            Reservar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Pie -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500 text-sm">
            © 2025 Tripadvisor LLC Todos los derechos reservados.
        </div>
    </footer>
</body>
</html>
