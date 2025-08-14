<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Página principal
Route::get('/inicio', function () {
    return view('inicio');
});


// Página de inicio de sesión
Route::get('/inicio_sesion', function () {
    return view('inicio_sesion');
});

Route::post('/iniciar-sesion', function () {
    return view('inicio-sesion');
})->name('login');




// Ruta para mostrar la página de búsqueda avanzada
Route::get('/busqueda', function () {
    return view('busqueda');
});


Route::get('/sesion', function () {
    return view('sesion_iniciada');
});

//ruta de sesion iniciada
Route::post('/login', function (Request $request) {
    // Aquí validaremos email y contraseña 
    // Por ahora solo esta redirigido a la vista de sesión iniciada

    return view('sesion_iniciada');
})->name('login');

// Ruta para mostrar la página de perfil
Route::get('/perfil', function () {
    return view('perfil');
});

// ruta de viajes
Route::get('/viajes', function () {
    return view('viajes');
})->name('viajes');

//ruta configuracion
Route::get('/configuracion', function () {
    return view('configuracion');
})->name('configuracion');


// Ruta para la página de restaurantes
Route::get('/restaurantes', function () {
    return view('restaurantes');
})->name('restaurantes');

// Ruta para procesar reservas (POST)
Route::post('/restaurantes/reservar', function () {
    // Lógica para procesar reservas
    return back()->with('success', 'Reserva realizada con éxito');
});

// Ruta para mostrar la página de actividades

Route::get('/actividades', function () {
    return view('actividades');
});

// Ruta para mostrar la página de destinos
Route::get('/destinos', function () {
    return view('destinos'); 
});

// Ruta para mostrar la página de reservas
Route::get('/reservas', function () {
    return view('reservas');
});

// Ruta para mostrar la página de nueva reserva
Route::get('/nueva_reserva_actividades', function () {
    return view('nueva_reserva_actividades');
});

// Ruta para mostrar la página de nueva reserva de restaurantes
Route::get('/nueva_reserva_restaurantes', function () {
    return view('nueva_reserva_restaurantes');
});
