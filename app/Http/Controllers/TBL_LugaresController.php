<?php

namespace App\Http\Controllers;

use App\Models\TBL_Lugares;
use Illuminate\Http\Request;

class TBL_LugaresController extends Controller
{
    /**
     * Listar todos los lugares
     */
    public function index()
    {
        return response()->json(TBL_Lugares::all(), 200);
    }

    /**
     * Mostrar un lugar específico
     */
    public function show($id)
    {
        $lugar = TBL_Lugares::find($id);

        if (!$lugar) {
            return response()->json(['message' => 'Lugar no encontrado'], 404);
        }

        return response()->json($lugar, 200);
    }

    /**
     * Crear un nuevo lugar
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_categoria' => 'required|integer',
            'id_ubicacion' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'direccion' => 'nullable|string|max:255',
            'latitud' => 'nullable|string|max:50',
            'longitud' => 'nullable|string|max:50',
            'sitio_web' => 'nullable|string|max:255'
        ]);

        $lugar = TBL_Lugares::create($validated);

        return response()->json($lugar, 201);
    }

    /**
     * Actualizar un lugar
     */
    public function update(Request $request, $id)
    {
        $lugar = TBL_Lugares::find($id);

        if (!$lugar) {
            return response()->json(['message' => 'Lugar no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_categoria' => 'sometimes|integer',
            'id_ubicacion' => 'sometimes|integer',
            'nombre' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string',
            'direccion' => 'nullable|string|max:255',
            'latitud' => 'nullable|string|max:50',
            'longitud' => 'nullable|string|max:50',
            'sitio_web' => 'nullable|string|max:255'
        ]);

        $lugar->update($validated);

        return response()->json($lugar, 200);
    }

    /**
     * Eliminar un lugar
     */
    public function destroy($id)
    {
        $lugar = TBL_Lugares::find($id);

        if (!$lugar) {
            return response()->json(['message' => 'Lugar no encontrado'], 404);
        }

        $lugar->delete();

        return response()->json(['message' => 'Lugar eliminado correctamente'], 200);
    }
}
