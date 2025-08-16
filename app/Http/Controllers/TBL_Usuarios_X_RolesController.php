<?php

namespace App\Http\Controllers;

use App\Models\TBL_Usuarios_X_Roles;
use Illuminate\Http\Request;

class TBL_Usuarios_X_RolesController extends Controller
{
    /**
     * Listar todos los registros de usuarios x roles
     */
    public function index()
    {
        return response()->json(TBL_Usuarios_X_Roles::all(), 200);
    }

    /**
     * Mostrar un registro específico
     */
    public function show($id_usuario, $id_rol)
    {
        $registro = TBL_Usuarios_X_Roles::where('id_usuario', $id_usuario)
            ->where('id_rol', $id_rol)
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
            'id_usuario' => 'required|integer',
            'id_rol' => 'required|integer',
            'fecha_asignacion' => 'nullable|date',
            'fecha_fin' => 'nullable|date'
        ]);

        $registro = TBL_Usuarios_X_Roles::create($validated);

        return response()->json($registro, 201);
    }

    /**
     * Actualizar un registro específico
     */
    public function update(Request $request, $id_usuario, $id_rol)
    {
        $registro = TBL_Usuarios_X_Roles::where('id_usuario', $id_usuario)
            ->where('id_rol', $id_rol)
            ->first();

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $validated = $request->validate([
            'fecha_asignacion' => 'nullable|date',
            'fecha_fin' => 'nullable|date'
        ]);

        $registro->update($validated);

        return response()->json($registro, 200);
    }

    /**
     * Eliminar un registro específico
     */
    public function destroy($id_usuario, $id_rol)
    {
        $registro = TBL_Usuarios_X_Roles::where('id_usuario', $id_usuario)
            ->where('id_rol', $id_rol)
            ->first();

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        $registro->delete();

        return response()->json(['message' => 'Registro eliminado correctamente'], 200);
    }
}
