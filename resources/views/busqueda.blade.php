<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda Avanzada</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .filter-item {
            transition: background-color 0.2s;
        }
        .filter-item:hover {
            background-color: #f3f4f6;
        }
        .result-row:hover {
            background-color: #f8fafc;
        }
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Búsqueda Avanzada</h1>
            <span class="badge bg-gray-200 text-gray-800">Versión 3.0</span>
        </header>

        <!-- Opciones de Búsqueda -->
        <section class="card bg-white p-6 mb-8">
            <h2 class="sr-only">Opciones de búsqueda</h2>
            <ul class="space-y-3">
                <li class="filter-item p-3 rounded-lg">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 mr-3">
                        <span class="text-gray-700">cpuberdato/bauconado (huele, restaurante, cartolácia...)</span>
                    </label>
                </li>
                <li class="filter-item p-3 rounded-lg">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" checked class="form-checkbox h-5 w-5 text-blue-600 mr-3">
                        <span class="text-gray-700">cpuberdato (súbdos registros)</span>
                    </label>
                </li>
                <li class="filter-item p-3 rounded-lg">
                    <label class="flex items-center cursor-pointer">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600 mr-3">
                        <span class="text-gray-700">cpuberdato (súbdos registros)</span>
                    </label>
                </li>
            </ul>
        </section>

        <!-- Contenido Principal -->
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Filtros -->
            <aside class="md:w-1/4">
                <div class="card bg-white p-6">
                    <h2 class="text-xl font-semibold mb-4 pb-2 border-b">Filtros</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-medium mb-2">Tipo de lugar</h3>
                            <select class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>Roles</option>
                                <option>Líneas</option>
                                <option>Mantenentes</option>
                                <option>Atendentes</option>
                                <option>Análises</option>
                                <option>Gestión</option>
                                <option>Cumplida</option>
                            </select>
                        </div>
                        
                        <div>
                            <h3 class="font-medium mb-2">Página</h3>
                            <input type="text" placeholder="1 y pages" 
                                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        
                        <div>
                            <h3 class="font-medium mb-2">E-mail</h3>
                            <input type="email" placeholder="info@búsqueda.es" 
                                   class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Resultados -->
            <main class="md:w-3/4">
                <h2 class="text-xl font-semibold mb-4">Resultados de búsqueda</h2>
                
                <div class="card bg-white overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Químico para</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Retomando</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Resultado 1 -->
                            <tr class="result-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Restaurantes El Jardín</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">4,9 g (cm)</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                            
                            <!-- Resultado 2 -->
                            <tr class="result-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Instalaciones | Módulos</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                            
                            <!-- Resultado 3 -->
                            <tr class="result-row">
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">Descripción restauración en el hermano</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">Profundidad pública de la mejor preservación residencial</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                            
                            <!-- Resultado 4 -->
                            <tr class="result-row">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">CC - CCC - 2 km</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                            
                            <!-- Hotel -->
                            <tr class="result-row">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Hotel Parco</div>
                                    <div class="text-sm text-gray-600 mt-1">Hotel Búsqueda Búsqueda 6,8 g (cm)</div>
                                    <div class="text-sm text-gray-500 mt-1">al calleño del cuaderno | Fundaciones y actividades sanitarias, local para realizar los equipos y planes.</div>
                                </td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                            
                            <!-- Museo -->
                            <tr class="result-row">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Museo de Arts Contemporáneos</div>
                                    <div class="text-sm text-gray-600 mt-1">C/CAS/ANVENTORES/APOS/PODERGENCIAS/SÍNDIOS CON VIDA</div>
                                    <div class="text-sm text-gray-500 mt-1">Aumentación adecuada de este asiento productivo incluido a disposiciones.</div>
                                </td>
                                <td class="px-6 py-4"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Ver objetivo</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

        <!-- Footer -->
        <footer class="mt-12 text-center text-sm text-gray-500">
            <p>© 2023 Búsqueda Avanzada. Todos los derechos reservados.</p>
            <p class="mt-2">[Cámara]</p>
        </footer>
    </div>
</body>
</html>