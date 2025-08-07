<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Viajes - TripAdvisor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .trip-card {
            transition: all 0.3s ease;
        }
        .trip-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #1a936f;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #14805d;
        }
    </style>
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
                    <a href="#" class="text-gray-700 hover:text-green-600">Destinos</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Actividades</a>
                    <a href="#" class="text-gray-700 hover:text-green-600">Restaurantes</a>
                    <a href="/viajes" class="text-gray-700 font-medium hover:text-green-600">Mis Viajes</a>
                    <!-- Avatar de usuario -->
                    <div class="h-8 w-8 rounded-full bg-green-600 flex items-center justify-center text-white font-bold">
                        <span>JP</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Mis viajes</h1>
            <button class="btn-primary text-white px-6 py-3 rounded-md font-medium flex items-center">
                <i class="fas fa-plus mr-2"></i> Crear un viaje nuevo
            </button>
        </div>

        <!-- Sección de información -->
        <section class="bg-white rounded-lg shadow-md p-8 mb-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Planifica a tu manera con la función de Viajes</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6">
                Crea un Viaje con tus lugares guardados, reseñas y fotos.
            <button class="btn-primary text-white px-6 py-2 rounded-md font-medium">
                Crear mi primer viaje
            </button>
        </section>

        <!-- Aquí irían los viajes existentes del usuario -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Ejemplo de tarjeta de viaje (repetir para cada viaje) -->
            <div class="trip-card bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-map-marked-alt text-4xl text-gray-400"></i>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Viaje a Barcelona</h3>
                    <p class="text-gray-600 text-sm mb-3">5 lugares • 12-18 Mayo 2023</p>
                    <div class="flex space-x-2">
                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">En planificación</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-gray-100 border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-500 text-sm mb-6">
                © 2025 Tripadvisor LLC Todos los derechos reservados.
            </div>
            
            <div class="flex flex-wrap justify-center gap-4 mb-6">
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Condiciones de uso</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Declaración de privacidad y de cookies</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Consentimiento de cookie</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Mapa del sitio</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Cómo funciona el sitio</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Contactanos</a>
                <a href="#" class="text-gray-600 hover:text-green-600 text-sm">Declaración de accesibilidad</a>
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