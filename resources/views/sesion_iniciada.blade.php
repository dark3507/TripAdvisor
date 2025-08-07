<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripAdvisor - Encuentra tu próximo destino</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background-image: url('https://images.unsplash.com/photo-1506929562872-bb421503ef21');
            background-size: cover;
            background-position: center;
        }
        .search-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
        .category-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">

    <!-- Barra de navegación con sesión iniciada -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-green-600">TripAdvisor</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-green-600">Destinos</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Actividades</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Restaurantes</a>

                    <!-- Menú de usuario -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Abrir menú de usuario</span>
                                <div class="h-8 w-8 rounded-full bg-green-600 flex items-center justify-center text-white font-bold">
                                    JP
                                </div>
                                <span class="ml-2 text-gray-700">Juan Pérez</span>
                            </button>
                        </div>

                        <!-- Menú desplegable -->
                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="/perfil" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tu perfil</a>
                            <a href="/viajes" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tus viajes</a>
                            <a href="/configuracion" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Configuración</a>
                            <a href="/inicio" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Cerrar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero section con buscador -->
    <div class="hero-bg py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-white text-center mb-6">¿A dónde quieres ir?</h1>

            <div class="bg-white p-6 rounded-lg search-card max-w-4xl mx-auto">
                <div class="flex space-x-4 mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" checked>
                        <span class="ml-2">Hoteles</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" checked>
                        <span class="ml-2">Actividades</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" checked>
                        <span class="ml-2">Restaurantes</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2">Vuelos</span>
                    </label>
                </div>

                <div class="relative">
                    <input type="text" placeholder="Buscar destinos, hoteles, cosas para hacer..." 
                           class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button class="absolute right-2 top-2 bg-green-600 text-white p-2 rounded-md hover:bg-green-700">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de descubrimiento -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Encuentra actividades para todos tus intereses</h2>
            <p class="text-xl text-gray-600">Explora más de 400,000 experiencias y reserva con nosotros.</p>
            <button class="mt-6 bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 font-medium">Reservar ahora</button>
        </div>

        <div class="bg-green-50 p-8 rounded-lg mb-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Vive experiencias premiadas</h3>
            <p class="text-gray-600 mb-6">Ganadoras de los Premios Travelers' Choice 2025 - Lo Mejor de lo Mejor en Actividades</p>
            <button class="bg-white text-green-600 px-6 py-2 rounded-md hover:bg-gray-100 border border-green-600">Ver más</button>
        </div>
    </div>

    <!-- Categorías populares -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-8">Explora por categorías</h3>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-bold text-lg mb-2">Experiencias Top</h4>
                    <p class="text-gray-600">Las actividades mejor valoradas por nuestros viajeros</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-bold text-lg mb-2">Atracciones Principales</h4>
                    <p class="text-gray-600">Los lugares que no te puedes perder</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-bold text-lg mb-2">Lista de deseos</h4>
                    <p class="text-gray-600">Experiencias únicas para tu bucket list</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-bold text-lg mb-2">Cultural & Histórico</h4>
                    <p class="text-gray-600">Sumérgete en la cultura e historia local</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Artículo destacado -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1583511655826-05700442b31b" alt="Viajar con mascotas" class="rounded-lg w-full">
            </div>
            <div class="md:w-1/2">
                <span class="text-sm text-gray-500">En colaboración con PETVIAJE</span>
                <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-4">Tu guía para viajar con mascotas</h3>
                <p class="text-gray-600 mb-6">Viajar con tu perro nunca ha sido tan fácil o divertido. Ciudades en todo el país ofrecen hoteles, parques y actividades pet-friendly. Con la misión de PETVIAJE de hacer el mundo más amigable para las mascotas...</p>
                <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700">Leer ahora</button>
            </div>
        </div>
    </div>

    <!-- Recomendaciones -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Te podrían gustar estas opciones</h3>
            <p class="text-gray-600 mb-8">Más cosas que hacer en Sorrento</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1503917988258-f87a78e3c995" alt="Costa Amalfitana" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold mb-2">Desde Sorrento: Tour en grupo pequeño por la Costa Amalfitana</h4>
                        <p class="text-gray-600 text-sm">Disfruta de las vistas espectaculares de la costa</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4" alt="Positano" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold mb-2">Tour compartido a la Costa Amalfitana: Positano, baño y almuerzo ligero</h4>
                        <p class="text-gray-600 text-sm">Visita el pintoresco pueblo de Positano</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1518688248743-bf3b6f66c318" alt="Capri" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold mb-2">Excursión en grupo pequeño a la isla de Capri desde Sorrento</h4>
                        <p class="text-gray-600 text-sm">Descubre la hermosa isla de Capri</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1564604761388-83eafc96f668" alt="Grotta Azzurra" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="font-bold mb-2">Tour en barco a Capri desde Sorrento: Baño, Grutas y Almuerzo ligero</h4>
                        <p class="text-gray-600 text-sm">Visita la famosa Gruta Azul</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="font-bold text-lg mb-4">ViajePerfecto</h4>
                    <p class="text-gray-400">Planifica tu viaje perfecto con nuestras recomendaciones.</p>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Compañía</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Acerca de</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Trabajos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Noticias</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Recursos</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Guías</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ayuda</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Términos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacidad</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 ViajePerfecto. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mostrar/ocultar menú de usuario
        document.getElementById('user-menu-button').addEventListener('click', function() {
            const menu = document.querySelector('[role="menu"]');
            menu.classList.toggle('hidden');
        });

        // Ocultar menú al hacer clic fuera
        document.addEventListener('click', function(event) {
            const menuButton = document.getElementById('user-menu-button');
            const menu = document.querySelector('[role="menu"]');
            
            if (!menuButton.contains(event.target) && !menu.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
