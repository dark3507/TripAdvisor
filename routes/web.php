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

