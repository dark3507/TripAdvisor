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
                    <span class="text-xl font-bold text-green-600">TripAdvisor</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/destinos" class="text-gray-700 hover:text-green-600">Destinos</a>
                    <a href="/actividades" class="text-gray-700 hover:text-green-600">Actividades</a>
                    <a href="/restaurantes" class="text-green-600 font-medium">Restaurantes</a>
                    <a href="/viajes" class="text-gray-700 hover:text-green-600">Mis Viajes</a>
                    <!-- Avatar de usuario -->
                     <!-- Avatar de usuario enlazado a sesión iniciada -->
    <a href="{{ url('/sesion') }}">
        <div class="h-8 w-8 rounded-full bg-green-600 flex items-center justify-center text-white font-bold">
            <span>JP</span>
        </div>
    </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Los restaurantes más populares</h1>
        
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Columna de filtros -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-4">
                    <!-- Filtro: Tipo de establecimiento -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Tipo de establecimiento</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Restaurantes</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Tentempiés</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Postres</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Café y té</span>
                            </label>
                        </div>
                        <button class="text-green-600 text-sm mt-2 hover:underline">Mostrar más</button>
                    </div>

                    <!-- Filtro: Tipo de comida -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Tipo de comida</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Desayuno</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Brunch</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Almuerzo</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Cena</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Tipos de cocina -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Tipos de cocina</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Estadounidense</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Bar</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Asiática</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Pizzería</span>
                            </label>
                        </div>
                        <button class="text-green-600 text-sm mt-2 hover:underline">Mostrar todo</button>
                    </div>

                    <!-- Filtro: Platillos -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Platillos</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Platos con pollo</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Ensalada</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Camarones</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Fritos</span>
                            </label>
                        </div>
                        <button class="text-green-600 text-sm mt-2 hover:underline">Mostrar todo</button>
                    </div>

                    <!-- Filtro: Premios -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Premios</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Travellers' Choice</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Precio -->
                    <div class="filter-section mb-6 pb-6 border-b">
                        <h2 class="font-bold text-lg mb-3">Precio</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Comer barato</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600" checked>
                                <span class="ml-2">Gama media</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Comida gourmet</span>
                            </label>
                        </div>
                    </div>

                    <!-- Filtro: Ofertas -->
                    <div class="filter-section">
                        <h2 class="font-bold text-lg mb-3">Ofertas y opciones en línea</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Servicio de entrega en línea</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox rounded text-green-600">
                                <span class="ml-2">Reservaciones en línea</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Columna de resultados -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-lg shadow-sm p-4 mb-4">
                    <span class="text-gray-600">3,042 resultados</span>
                </div>

                <!-- Restaurante 1 - Patrocinado -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm p-6 mb-6 relative">
                    <div class="sponsored-badge text-xs font-medium px-2 py-1 rounded absolute top-4 right-4">
                        Patrocinado
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Tabla Indian Restaurant Lake Nona</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.6 (63 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>De la India, Asiática</span> · 
                                <span>$$--$$$</span> · 
                                <span class="text-green-600">Abierto ahora</span>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="text-blue-600 hover:underline">Menú</a>
                            </div>
                            <div class="mt-4 space-y-1">
                                <p class="text-sm text-gray-600 italic">"Cocina india fantástica"</p>
                                <p class="text-sm text-gray-600 italic">"¡Debo intentarlo!!"</p>
                            </div>
                        </div>
                        <a href="{{ url('/nueva_reserva_restaurantes') }}" 
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>

                    </div>
                </div>

                <!-- Restaurante 2 - Patrocinado -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm p-6 mb-6 relative">
                    <div class="sponsored-badge text-xs font-medium px-2 py-1 rounded absolute top-4 right-4">
                        Patrocinado
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800">Tabla Indian Restaurant</h2>
                            <div class="flex items-center mt-1">
                                <div class="rating-stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-gray-600 ml-2">4.3 (886 opiniones)</span>
                            </div>
                            <div class="text-gray-600 mt-2">
                                <span>De la India, Tailandesa</span> · 
                                <span>$$--$$$</span> · 
                                <span class="text-green-600">Abierto ahora</span>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="text-blue-600 hover:underline">Menú</a>
                            </div>
                            <div class="mt-4 space-y-1">
                                <p class="text-sm text-gray-600 italic">"Comida india de Calidad"</p>
                                <p class="text-sm text-gray-600 italic">"Excelente comida y sazón."</p>
                            </div>
                        </div>
                                <a href="{{ url('/nueva_reserva_restaurantes') }}" 
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>
                    </div>
                </div>

                <!-- Restaurante 3 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex items-start">
                        <span class="text-2xl font-bold text-gray-300 mr-4">1</span>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-800">Café Tu Tu Tango</h2>
                                    <div class="flex items-center mt-1">
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-gray-600 ml-2">4.4 (2,601 opiniones)</span>
                                    </div>
                                    <div class="text-gray-600 mt-2">
                                        <span>Mexicano, Estadounidense</span> · 
                                        <span>$$--$$$</span> · 
                                        <span class="text-green-600">Abierto ahora</span>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="text-blue-600 hover:underline">Menú</a>
                                    </div>
                                    <div class="mt-4 space-y-1">
                                        <p class="text-sm text-gray-600 italic">"Almuerzo con mi esposa"</p>
                                        <p class="text-sm text-gray-600 italic">"adorable lugar"</p>
                                    </div>
                                </div>
                                        <a href="{{ url('/nueva_reserva_restaurantes') }}" 
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Restaurante 4 -->
                <div class="restaurant-card bg-white rounded-lg shadow-sm p-6 mb-6">
                    <div class="flex items-start">
                        <span class="text-2xl font-bold text-gray-300 mr-4">2</span>
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-800">O'Kenan Restaurant</h2>
                                    <div class="flex items-center mt-1">
                                        <div class="rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-gray-600 ml-2">4.6 (853 opiniones)</span>
                                    </div>
                                    <div class="text-gray-600 mt-2">
                                        <span>Latina, Venezolana</span> · 
                                        <span>$</span> · 
                                        <span class="text-green-600">Abierto ahora</span>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="text-blue-600 hover:underline">Menú</a>
                                    </div>
                                    <div class="mt-4 space-y-1">
                                        <p class="text-sm text-gray-600 italic">"Estuve de visita el pasado"</p>
                                        <p class="text-sm text-gray-600 italic">"Excellent food great atmosphere"</p>
                                    </div>
                                </div>
                                       <a href="{{ url('/nueva_reserva_restaurantes') }}" 
   class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md inline-block">
    Reservar
</a>
                            </div>
                        </div>
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
            
            <div class="flex flex-wrap justify-center gap-4 mb-6 text-xs">
                <a href="#" class="text-gray-600 hover:text-green-600">Condiciones de uso</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Declaración de privacidad y de cookies</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Consentimiento de cookie</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Mapa del sitio</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Cómo funciona el sitio</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Contactanos</a>
                <a href="#" class="text-gray-600 hover:text-green-600">Declaración de accesibilidad</a>
            </div>
            
            <div class="text-gray-500 text-xs text-center max-w-3xl mx-auto">
                Tripadvisor LLC no ofrece ninguna garantía de disponibilidad de los precios promocionados en nuestros sitios y aplicaciones. 
                Los precios anunciados podrían exigir una estadía de una duración determinada a tener fechas... 
                <a href="#" class="text-green-600 hover:underline">Leer más ▼</a>
            </div>
        </div>
    </footer>
</body>
</html>