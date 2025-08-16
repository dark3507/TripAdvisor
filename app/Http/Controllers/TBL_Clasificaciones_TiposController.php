<?php

namespace App\Http\Controllers;

use App\Models\TBL_Clasificaciones_Tipos;
use Illuminate\Http\Request;

class TBL_Clasificaciones_TiposController extends Controller
{
    /**
     * Listar todas las clasificaciones de tipos
     */
    public function index()
    {
        return response()->json(TBL_Clasificaciones_Tipos::all(), 200);
    }

    /**
     * Mostrar una clasificación específica
     */
    public function show($id)
    {
        $clasificacion = TBL_Clasificaciones_Tipos::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        return response()->json($clasificacion, 200);
    }

    /**
     * Crear una nueva clasificación
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_clasificacion_tipo' => 'required|string|max:255'
        ]);

        $clasificacion = TBL_Clasificaciones_Tipos::create($validated);

        return response()->json($clasificacion, 201);
    }

    /**
     * Actualizar una clasificación
     */
    public function update(Request $request, $id)
    {
        $clasificacion = TBL_Clasificaciones_Tipos::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        $validated = $request->validate([
            'nombre_clasificacion_tipo' => 'sometimes|string|max:255'
        ]);

        $clasificacion->update($validated);

        return response()->json($clasificacion, 200);
    }

    /**
     * Eliminar una clasificación
     */
    public function destroy($id)
    {
        $clasificacion = TBL_Clasificaciones_Tipos::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        $clasificacion->delete();

        return response()->json(['message' => 'Clasificación eliminada correctamente'], 200);
    }
}
