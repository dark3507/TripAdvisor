<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Viajes</title>
    <link rel="stylesheet" href="{{ asset('css/style_crear_viaje.css') }}">
</head>
<body>
    <header class="header">
        <h1>Mis viajes</h1>
    </header>

    <main class="viajes-container">
        <div class="crear-viaje-card" onclick="abrirFormulario()">
            <span class="icono">＋</span>
            <span>Crear un viaje nuevo</span>
        </div>

        <div class="mensaje-inicial">
            <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Icono viaje">
            <h2>Planifica a tu manera con la función de Viajes...</h2>
            <p>
                Crea un viaje con tus lugares guardados o usa recomendaciones personalizadas,
                colabora con amigos y organiza tus ideas de viaje.
            </p>
        </div>
    </main>

    <!-- Panel lateral -->
    <div id="formulario-panel" class="panel">
        <div class="panel-header">
            <h2>Crear un viaje</h2>
            <button onclick="cerrarFormulario()">✖</button>
        </div>
        <form>
            <label>Nombre del viaje</label>
            <input type="text" placeholder="p. ej., Vacaciones de verano en Grecia" maxlength="80">

            <label>Destino</label>
            <input type="text" placeholder="¿A dónde irás?">

            <div class="panel-footer">
                <button type="button" class="cancelar" onclick="cerrarFormulario()">Cancelar</button>
                <button type="submit" class="crear">Crear viaje</button>
            </div>
        </form>
    </div>

    <script>
        function abrirFormulario() {
            document.getElementById("formulario-panel").classList.add("activo");
        }
        function cerrarFormulario() {
            document.getElementById("formulario-panel").classList.remove("activo");
        }
    </script>
</body>
</html>
