<?php

namespace App\Http\Controllers;

use App\Models\TBL_Favoritos;
use Illuminate\Http\Request;

class TBL_FavoritosController extends Controller
{
    /**
     * Listar todos los favoritos
     */
    public function index()
    {
        return response()->json(TBL_Favoritos::all(), 200);
    }

    /**
     * Mostrar un favorito específico (usando id_usuario y id_lugar)
     */
    public function show($id_usuario, $id_lugar)
    {
        $favorito = TBL_Favoritos::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$favorito) {
            return response()->json(['message' => 'Favorito no encontrado'], 404);
        }

        return response()->json($favorito, 200);
    }

    /**
     * Crear un nuevo favorito
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_usuario' => 'required|integer',
            'id_lugar' => 'required|integer',
            'fecha_agregado' => 'nullable|date'
        ]);

        $favorito = TBL_Favoritos::create($validated);

        return response()->json($favorito, 201);
    }

    /**
     * Actualizar un favorito específico
     */
    public function update(Request $request, $id_usuario, $id_lugar)
    {
        $favorito = TBL_Favoritos::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$favorito) {
            return response()->json(['message' => 'Favorito no encontrado'], 404);
        }

        $validated = $request->validate([
            'fecha_agregado' => 'nullable|date'
        ]);

        $favorito->update($validated);

        return response()->json($favorito, 200);
    }

    /**
     * Eliminar un favorito específico
     */
    public function destroy($id_usuario, $id_lugar)
    {
        $favorito = TBL_Favoritos::where('id_usuario', $id_usuario)
            ->where('id_lugar', $id_lugar)
            ->first();

        if (!$favorito) {
            return response()->json(['message' => 'Favorito no encontrado'], 404);
        }

        $favorito->delete();

        return response()->json(['message' => 'Favorito eliminado correctamente'], 200);
    }
}
