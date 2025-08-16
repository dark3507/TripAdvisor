<?php

namespace App\Http\Controllers;

use App\Models\TBL_Lugares_X_Etiquetas;
use Illuminate\Http\Request;

class TBL_Lugares_X_EtiquetasController extends Controller
{
    /**
     * Listar todos los registros
     */
    public function index()
    {
        return response()->json(TBL_Lugares_X_Etiquetas::all(), 200);
    }

    /**
     * Mostrar un registro específico
     */
    public function show($id_lugar, $id_etiqueta)
    {
        $registro = TBL_Lugares_X_Etiquetas::where('id_lugar', $id_lugar)
            ->where('id_etiqueta', $id_etiqueta)
            ->first();

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($registro, 200);
    }

    /**
     * Crear un nuevo registro
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_lugar' => 'required|integer',
            'id_etiqueta' => 'required|integer'
        ]);

        $registro = TBL_Lugares_X_Etiquetas::create($validated);

        return response()->json($registro, 201);
    }

    /**
     * Actualizar un registro específico
     */
    public function update(Request $request, $id_lugar, $id_etiqueta)
    {
        $registro = TBL_Lugares_X_Etiquetas::where('id_lugar', $id_lugar)
            ->where('id_etiqueta', $id_etiqueta)
            ->first();

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        // Solo permitimos actualizar si hubiera campos adicionales; aquí no hay, así que opcional
        $validated = $request->validate([]);

        $registro->update($validated);

        return response()->json($registro, 200);
    }

    /**
     * Eliminar un registro específico
     */
    public function destroy($id_lugar, $id_etiqueta)
    {
        $registro = TBL_Lugares_X_Etiquetas::where('id_lugar', $id_lugar)
            ->where('id_etiqueta', $id_etiqueta)
            ->first();

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $registro->delete();

        return response()->json(['message' => 'Registro eliminado correctamente'], 200);
    }
}
