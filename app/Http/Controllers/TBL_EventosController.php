<?php

namespace App\Http\Controllers;

use App\Models\TBL_Eventos;
use Illuminate\Http\Request;

class TBL_EventosController extends Controller
{
    /**
     * Listar todos los eventos
     */
    public function index()
    {
        return response()->json(TBL_Eventos::all(), 200);
    }

    /**
     * Mostrar un evento específico
     */
    public function show($id)
    {
        $evento = TBL_Eventos::find($id);

        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }

        return response()->json($evento, 200);
    }

    /**
     * Crear un nuevo evento
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_estado_evento' => 'required|integer',
            'id_lugar' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date',
            'precio' => 'nullable|numeric'
        ]);

        $evento = TBL_Eventos::create($validated);

        return response()->json($evento, 201);
    }

    /**
     * Actualizar un evento
     */
    public function update(Request $request, $id)
    {
        $evento = TBL_Eventos::find($id);

        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_estado_evento' => 'sometimes|integer',
            'id_lugar' => 'sometimes|integer',
            'nombre' => 'sometimes|string|max:255',
            'descripcion' => 'nullable|string',
            'fecha_inicio' => 'nullable|date',
            'fecha_fin' => 'nullable|date',
            'precio' => 'nullable|numeric'
        ]);

        $evento->update($validated);

        return response()->json($evento, 200);
    }

    /**
     * Eliminar un evento
     */
    public function destroy($id)
    {
        $evento = TBL_Eventos::find($id);

        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }

        $evento->delete();

        return response()->json(['message' => 'Evento eliminado correctamente'], 200);
    }
}
