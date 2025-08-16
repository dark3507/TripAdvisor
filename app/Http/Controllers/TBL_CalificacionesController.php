<?php

namespace App\Http\Controllers;

use App\Models\TBL_Calificaciones;
use Illuminate\Http\Request;

class TBL_CalificacionesController extends Controller
{
    /**
     * Listar todas las calificaciones
     */
    public function index()
    {
        return response()->json(TBL_Calificaciones::all(), 200);
    }

    /**
     * Mostrar una calificación específica
     */
    public function show($id)
    {
        $calificacion = TBL_Calificaciones::find($id);

        if (!$calificacion) {
            return response()->json(['message' => 'Calificación no encontrada'], 404);
        }

        return response()->json($calificacion, 200);
    }

    /**
     * Crear una nueva calificación
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_tipo_calificacion' => 'required|integer',
            'id_resenia' => 'required|integer',
            'puntaje' => 'required|numeric',
            'comentario' => 'nullable|string'
        ]);

        $calificacion = TBL_Calificaciones::create($validated);

        return response()->json($calificacion, 201);
    }

    /**
     * Actualizar una calificación
     */
    public function update(Request $request, $id)
    {
        $calificacion = TBL_Calificaciones::find($id);

        if (!$calificacion) {
            return response()->json(['message' => 'Calificación no encontrada'], 404);
        }

        $validated = $request->validate([
            'id_tipo_calificacion' => 'sometimes|integer',
            'id_resenia' => 'sometimes|integer',
            'puntaje' => 'sometimes|numeric',
            'comentario' => 'nullable|string'
        ]);

        $calificacion->update($validated);

        return response()->json($calificacion, 200);
    }

    /**
     * Eliminar una calificación
     */
    public function destroy($id)
    {
        $calificacion = TBL_Calificaciones::find($id);

        if (!$calificacion) {
            return response()->json(['message' => 'Calificación no encontrada'], 404);
        }

        $calificacion->delete();

        return response()->json(['message' => 'Calificación eliminada correctamente'], 200);
    }
}
