<?php

namespace App\Http\Controllers;

use App\Models\TBL_Telefonos;
use Illuminate\Http\Request;

class TBL_TelefonosController extends Controller
{
    /**
     * Listar todos los teléfonos
     */
    public function index()
    {
        return response()->json(TBL_Telefonos::all(), 200);
    }

    /**
     * Mostrar un teléfono específico
     */
    public function show($id)
    {
        $telefono = TBL_Telefonos::find($id);

        if (!$telefono) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }

        return response()->json($telefono, 200);
    }

    /**
     * Crear un nuevo teléfono
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_tipo_telefono' => 'required|integer',
            'numero_telefono' => 'required|string|max:50',
            'es_principal' => 'nullable|boolean',
            'fecha_registro' => 'nullable|date',
            'observacion' => 'nullable|string'
        ]);

        $telefono = TBL_Telefonos::create($validated);

        return response()->json($telefono, 201);
    }

    /**
     * Actualizar un teléfono
     */
    public function update(Request $request, $id)
    {
        $telefono = TBL_Telefonos::find($id);

        if (!$telefono) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_tipo_telefono' => 'sometimes|integer',
            'numero_telefono' => 'sometimes|string|max:50',
            'es_principal' => 'nullable|boolean',
            'fecha_registro' => 'nullable|date',
            'observacion' => 'nullable|string'
        ]);

        $telefono->update($validated);

        return response()->json($telefono, 200);
    }

    /**
     * Eliminar un teléfono
     */
    public function destroy($id)
    {
        $telefono = TBL_Telefonos::find($id);

        if (!$telefono) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }

        $telefono->delete();

        return response()->json(['message' => 'Teléfono eliminado correctamente'], 200);
    }
}
