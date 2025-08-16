<?php

namespace App\Http\Controllers;

use App\Models\TBL_Historial_Reportes;
use Illuminate\Http\Request;

class TBL_Historial_ReportesController extends Controller
{
    /**
     * Listar todos los historiales de reportes
     */
    public function index()
    {
        return response()->json(TBL_Historial_Reportes::all(), 200);
    }

    /**
     * Mostrar un historial de reporte específico
     */
    public function show($id)
    {
        $historial = TBL_Historial_Reportes::find($id);

        if (!$historial) {
            return response()->json(['message' => 'Historial no encontrado'], 404);
        }

        return response()->json($historial, 200);
    }

    /**
     * Crear un nuevo historial de reporte
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_reporte' => 'required|integer',
            'estado_anterior' => 'required|string|max:255',
            'estado_nuevo' => 'required|string|max:255',
            'fecha_cambio' => 'nullable|date',
            'comentarios' => 'nullable|string'
        ]);

        $historial = TBL_Historial_Reportes::create($validated);

        return response()->json($historial, 201);
    }

    /**
     * Actualizar un historial de reporte
     */
    public function update(Request $request, $id)
    {
        $historial = TBL_Historial_Reportes::find($id);

        if (!$historial) {
            return response()->json(['message' => 'Historial no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_reporte' => 'sometimes|integer',
            'estado_anterior' => 'sometimes|string|max:255',
            'estado_nuevo' => 'sometimes|string|max:255',
            'fecha_cambio' => 'nullable|date',
            'comentarios' => 'nullable|string'
        ]);

        $historial->update($validated);

        return response()->json($historial, 200);
    }

    /**
     * Eliminar un historial de reporte
     */
    public function destroy($id)
    {
        $historial = TBL_Historial_Reportes::find($id);

        if (!$historial) {
            return response()->json(['message' => 'Historial no encontrado'], 404);
        }

        $historial->delete();

        return response()->json(['message' => 'Historial eliminado correctamente'], 200);
    }
}
