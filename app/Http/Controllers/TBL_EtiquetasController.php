<?php

namespace App\Http\Controllers;

use App\Models\TBL_Etiquetas;
use Illuminate\Http\Request;

class TBL_EtiquetasController extends Controller
{
    /**
     * Listar todas las etiquetas
     */
    public function index()
    {
        return response()->json(TBL_Etiquetas::all(), 200);
    }

    /**
     * Mostrar una etiqueta específica
     */
    public function show($id)
    {
        $etiqueta = TBL_Etiquetas::find($id);

        if (!$etiqueta) {
            return response()->json(['message' => 'Etiqueta no encontrada'], 404);
        }

        return response()->json($etiqueta, 200);
    }

    /**
     * Crear una nueva etiqueta
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_etiqueta' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $etiqueta = TBL_Etiquetas::create($validated);

        return response()->json($etiqueta, 201);
    }

    /**
     * Actualizar una etiqueta
     */
    public function update(Request $request, $id)
    {
        $etiqueta = TBL_Etiquetas::find($id);

        if (!$etiqueta) {
            return response()->json(['message' => 'Etiqueta no encontrada'], 404);
        }

        $validated = $request->validate([
            'nombre_etiqueta' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $etiqueta->update($validated);

        return response()->json($etiqueta, 200);
    }

    /**
     * Eliminar una etiqueta
     */
    public function destroy($id)
    {
        $etiqueta = TBL_Etiquetas::find($id);

        if (!$etiqueta) {
            return response()->json(['message' => 'Etiqueta no encontrada'], 404);
        }

        $etiqueta->delete();

        return response()->json(['message' => 'Etiqueta eliminada correctamente'], 200);
    }
}
