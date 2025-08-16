<?php

namespace App\Http\Controllers;

use App\Models\TBL_Fotos;
use Illuminate\Http\Request;

class TBL_FotosController extends Controller
{
    /**
     * Listar todas las fotos
     */
    public function index()
    {
        return response()->json(TBL_Fotos::all(), 200);
    }

    /**
     * Mostrar una foto específica
     */
    public function show($id)
    {
        $foto = TBL_Fotos::find($id);

        if (!$foto) {
            return response()->json(['message' => 'Foto no encontrada'], 404);
        }

        return response()->json($foto, 200);
    }

    /**
     * Crear una nueva foto
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_tipo_foto' => 'required|integer',
            'id_usuario' => 'required|integer',
            'id_lugar' => 'required|integer',
            'url_imagen' => 'required|string|max:255',
            'fecha_subida' => 'nullable|date',
            'descripcion' => 'nullable|string'
        ]);

        $foto = TBL_Fotos::create($validated);

        return response()->json($foto, 201);
    }

    /**
     * Actualizar una foto
     */
    public function update(Request $request, $id)
    {
        $foto = TBL_Fotos::find($id);

        if (!$foto) {
            return response()->json(['message' => 'Foto no encontrada'], 404);
        }

        $validated = $request->validate([
            'id_tipo_foto' => 'sometimes|integer',
            'id_usuario' => 'sometimes|integer',
            'id_lugar' => 'sometimes|integer',
            'url_imagen' => 'sometimes|string|max:255',
            'fecha_subida' => 'nullable|date',
            'descripcion' => 'nullable|string'
        ]);

        $foto->update($validated);

        return response()->json($foto, 200);
    }

    /**
     * Eliminar una foto
     */
    public function destroy($id)
    {
        $foto = TBL_Fotos::find($id);

        if (!$foto) {
            return response()->json(['message' => 'Foto no encontrada'], 404);
        }

        $foto->delete();

        return response()->json(['message' => 'Foto eliminada correctamente'], 200);
    }
}
