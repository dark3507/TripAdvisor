<?php

namespace App\Http\Controllers;

use App\Models\TBL_Clasificaciones_Estados;
use Illuminate\Http\Request;

class TBL_Clasificaciones_EstadosController extends Controller
{
    /**
     * Listar todas las clasificaciones de estado
     */
    public function index()
    {
        return response()->json(TBL_Clasificaciones_Estados::all(), 200);
    }

    /**
     * Mostrar una clasificación de estado específica
     */
    public function show($id)
    {
        $clasificacion = TBL_Clasificaciones_Estados::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        return response()->json($clasificacion, 200);
    }

    /**
     * Crear una nueva clasificación de estado
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_clasificacion_estado' => 'required|string|max:255'
        ]);

        $clasificacion = TBL_Clasificaciones_Estados::create($validated);

        return response()->json($clasificacion, 201);
    }

    /**
     * Actualizar una clasificación de estado
     */
    public function update(Request $request, $id)
    {
        $clasificacion = TBL_Clasificaciones_Estados::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        $validated = $request->validate([
            'nombre_clasificacion_estado' => 'sometimes|string|max:255'
        ]);

        $clasificacion->update($validated);

        return response()->json($clasificacion, 200);
    }

    /**
     * Eliminar una clasificación de estado
     */
    public function destroy($id)
    {
        $clasificacion = TBL_Clasificaciones_Estados::find($id);

        if (!$clasificacion) {
            return response()->json(['message' => 'Clasificación no encontrada'], 404);
        }

        $clasificacion->delete();

        return response()->json(['message' => 'Clasificación eliminada correctamente'], 200);
    }
}
