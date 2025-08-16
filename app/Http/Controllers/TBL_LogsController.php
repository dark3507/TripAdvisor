<?php

namespace App\Http\Controllers;

use App\Models\TBL_Logs;
use Illuminate\Http\Request;

class TBL_LogsController extends Controller
{
    /**
     * Listar todos los logs
     */
    public function index()
    {
        return response()->json(TBL_Logs::all(), 200);
    }

    /**
     * Mostrar un log específico
     */
    public function show($id)
    {
        $log = TBL_Logs::find($id);

        if (!$log) {
            return response()->json(['message' => 'Log no encontrado'], 404);
        }

        return response()->json($log, 200);
    }

    /**
     * Crear un nuevo log
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_usuario' => 'required|integer',
            'id_accion_ejecutada' => 'required|integer',
            'fecha_hora' => 'nullable|date',
            'ip_origen' => 'nullable|string|max:50'
        ]);

        $log = TBL_Logs::create($validated);

        return response()->json($log, 201);
    }

    /**
     * Actualizar un log
     */
    public function update(Request $request, $id)
    {
        $log = TBL_Logs::find($id);

        if (!$log) {
            return response()->json(['message' => 'Log no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_usuario' => 'sometimes|integer',
            'id_accion_ejecutada' => 'sometimes|integer',
            'fecha_hora' => 'nullable|date',
            'ip_origen' => 'nullable|string|max:50'
        ]);

        $log->update($validated);

        return response()->json($log, 200);
    }

    /**
     * Eliminar un log
     */
    public function destroy($id)
    {
        $log = TBL_Logs::find($id);

        if (!$log) {
            return response()->json(['message' => 'Log no encontrado'], 404);
        }

        $log->delete();

        return response()->json(['message' => 'Log eliminado correctamente'], 200);
    }
}
