<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades en Orlando - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style_actividades.css') }}" rel="stylesheet">
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
                    <a href="/actividades" class="text-green-600 font-medium">Actividades</a>
                    <a href="/restaurantes" class="text-gray-700 hover:text-green-600">Restaurantes</a>
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
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Actividades para hacer en Orlando</h1>
        
        <div class="flex flex-col lg:flex-row gap-6">

            <!-- Columna de filtros -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4">

                    <!-- Filtro: Tipo de actividad -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Tipo de actividad</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Tours</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Atracciones</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Experiencias al aire libre</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Duración -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Duración</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Menos de 1 hora</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">1-3 horas</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Más de 3 horas</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Precio -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Precio</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Gratis</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Costo medio</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Costo alto</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Valoración -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Valoración</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Excelente (4.5+)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Muy bueno (4-4.5)</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Columna de resultados -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                    <span class="text-gray-600">1,256 resultados</span>
                </div>

                <!-- Actividad 1 -->
                <div class="activity-card bg-white rounded-lg shadow-sm p-6 mb-6 relative">
                    <div class="sponsored-badge text-xs font-medium px-2 py-1 rounded absolute top-4 right-4">
                        Patrocinado
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Tour por los parques temáticos</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.5 (342 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>Duración: 2 horas</span> · 
                                <span>Costo medio</span> · 
                                <span class="text-green-600">Disponible hoy</span>
                            </div>
                            <div class="mt-4 space-y-1">
                                <p class="text-sm text-gray-600 italic">"Actividad divertida para toda la familia"</p>
                                <p class="text-sm text-gray-600 italic">"¡Muy recomendable!"</p>
                            </div>
                        </div>
                        <a href="{{ url('/nueva_reserva_actividades') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>

                    </div>
                </div>

                <!-- Actividad 2 -->
                <div class="activity-card bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Paseo en globo aerostático</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.7 (128 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>Duración: 1 hora</span> · 
                                <span>Costo alto</span> · 
                                <span class="text-green-600">Disponible mañana</span>
                            </div>
                            <div class="mt-4 space-y-1">
                                <p class="text-sm text-gray-600 italic">"Hermosa vista de Orlando"</p>
                                <p class="text-sm text-gray-600 italic">"Experiencia única"</p>
                            </div>
                        </div>
                         <a href="{{ url('/nueva_reserva_actividades') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>
                    </div>
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
