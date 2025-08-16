<?php

namespace App\Http\Controllers;

use App\Models\TBL_Recomendaciones;
use Illuminate\Http\Request;

class TBL_RecomendacionesController extends Controller
{
    /**
     * Listar todas las recomendaciones
     */
    public function index()
    {
        return response()->json(TBL_Recomendaciones::all(), 200);
    }

    /**
     * Mostrar una recomendación específica
     */
    public function show($id_usuario, $id_lugar)
    {
        $recomendacion = TBL_Recomendaciones::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$recomendacion) {
            return response()->json(['message' => 'Recomendación no encontrada'], 404);
        }

        return response()->json($recomendacion, 200);
    }

    /**
     * Crear una nueva recomendación
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_usuario' => 'required|integer',
            'id_lugar' => 'required|integer',
            'puntaje' => 'required|numeric',
            'motivo' => 'nullable|string',
            'fecha_creada' => 'nullable|date'
        ]);

        $recomendacion = TBL_Recomendaciones::create($validated);

        return response()->json($recomendacion, 201);
    }

    /**
     * Actualizar una recomendación específica
     */
    public function update(Request $request, $id_usuario, $id_lugar)
    {
        $recomendacion = TBL_Recomendaciones::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$recomendacion) {
            return response()->json(['message' => 'Recomendación no encontrada'], 404);
        }

        $validated = $request->validate([
            'puntaje' => 'sometimes|numeric',
            'motivo' => 'nullable|string',
            'fecha_creada' => 'nullable|date'
        ]);

        $recomendacion->update($validated);

        return response()->json($recomendacion, 200);
    }

    /**
     * Eliminar una recomendación específica
     */
    public function destroy($id_usuario, $id_lugar)
    {
        $recomendacion = TBL_Recomendaciones::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$recomendacion) {
            return response()->json(['message' => 'Recomendación no encontrada'], 404);
        }

        $recomendacion->delete();

        return response()->json(['message' => 'Recomendación eliminada correctamente'], 200);
    }
}
