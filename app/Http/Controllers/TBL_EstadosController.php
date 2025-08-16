<?php

namespace App\Http\Controllers;

use App\Models\TBL_Estados;
use Illuminate\Http\Request;

class TBL_EstadosController extends Controller
{
    /**
     * Listar todos los estados
     */
    public function index()
    {
        return response()->json(TBL_Estados::all(), 200);
    }

    /**
     * Mostrar un estado específico
     */
    public function show($id)
    {
        $estado = TBL_Estados::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        return response()->json($estado, 200);
    }

    /**
     * Crear un nuevo estado
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_clasificacion_estado' => 'required|integer',
            'nombre_estado' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $estado = TBL_Estados::create($validated);

        return response()->json($estado, 201);
    }

    /**
     * Actualizar un estado
     */
    public function update(Request $request, $id)
    {
        $estado = TBL_Estados::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_clasificacion_estado' => 'sometimes|integer',
            'nombre_estado' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $estado->update($validated);

        return response()->json($estado, 200);
    }

    /**
     * Eliminar un estado
     */
    public function destroy($id)
    {
        $estado = TBL_Estados::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        $estado->delete();

        return response()->json(['message' => 'Estado eliminado correctamente'], 200);
    }
}
