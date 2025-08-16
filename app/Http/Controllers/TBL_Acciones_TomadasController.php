<?php

namespace App\Http\Controllers;

use App\Models\TBL_Acciones_Tomadas;
use Illuminate\Http\Request;

class TBL_Acciones_TomadasController extends Controller
{
    /**
     * Listar todas las acciones tomadas
     */
    public function index()
    {
        return response()->json(TBL_Acciones_Tomadas::all(), 200);
    }

    /**
     * Mostrar una acción tomada específica
     */
    public function show($id)
    {
        $accion = TBL_Acciones_Tomadas::find($id);

        if (!$accion) {
            return response()->json(['message' => 'Acción no encontrada'], 404);
        }

        return response()->json($accion, 200);
    }

    /**
     * Crear una nueva acción tomada
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_accion_tomada' => 'required|string|max:255'
        ]);

        $accion = TBL_Acciones_Tomadas::create($validated);

        return response()->json($accion, 201);
    }

    /**
     * Actualizar una acción tomada
     */
    public function update(Request $request, $id)
    {
        $accion = TBL_Acciones_Tomadas::find($id);

        if (!$accion) {
            return response()->json(['message' => 'Acción no encontrada'], 404);
        }

        $validated = $request->validate([
            'nombre_accion_tomada' => 'sometimes|string|max:255'
        ]);

        $accion->update($validated);

        return response()->json($accion, 200);
    }

    /**
     * Eliminar una acción tomada
     */
    public function destroy($id)
    {
        $accion = TBL_Acciones_Tomadas::find($id);

        if (!$accion) {
            return response()->json(['message' => 'Acción no encontrada'], 404);
        }

        $accion->delete();

        return response()->json(['message' => 'Acción eliminada correctamente'], 200);
    }
}
