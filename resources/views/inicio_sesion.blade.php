<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripAdvisor - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .social-btn { 
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 5px;
            color: white;
            font-weight: bold;
        }
        .google { background-color: #DB4437; }
        .facebook { background-color: #4267B2; }
        .twitter { background-color: #1DA1F2; }
    </style>
</head>
<body class="bg-green-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-2">TripAdvisor</h1>
        <p class="text-center text-gray-600 mb-6">Planifica tu viaje perfecto</p>
        
        <h2 class="text-xl font-semibold mb-4">Iniciar Sesión</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Correo electrónico</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="ejemplo@correo.com" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Contraseña</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                <a href="#" class="text-sm text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>
            
            <hr class="my-4">
            
            <div class="mb-4 flex items-center">
                <input 
                    type="checkbox" 
                    id="remember" 
                    name="remember" 
                    class="mr-2"
                >
                <label for="remember">Mantener sesión iniciada</label>
            </div>
            
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 font-bold"
            >
                Iniciar Sesión
            </button>
        </form>
        
        <p class="text-center my-4 text-gray-600">O continúa con</p>
        
        <div class="flex justify-center mb-6">
            <a href="#" class="social-btn google">G</a>
            <a href="#" class="social-btn facebook">F</a>
            <a href="#" class="social-btn twitter">X</a>
        </div>
        
        <p class="text-center">
            ¿No tienes una cuenta? 
            <a href="#" class="text-blue-600 hover:underline">Regístrate</a>
        </p>
    </div>
</body>
</html>