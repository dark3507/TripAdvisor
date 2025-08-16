<?php

namespace App\Http\Controllers;

use App\Models\TBL_Usuarios;
use Illuminate\Http\Request;

class TBL_UsuariosController extends Controller
{
    /**
     * Listar todos los usuarios
     */
    public function index()
    {
        return response()->json(TBL_Usuarios::all(), 200);
    }

    /**
     * Mostrar un usuario específico
     */
    public function show($id)
    {
        $usuario = TBL_Usuarios::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return response()->json($usuario, 200);
    }

    /**
     * Crear un nuevo usuario
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_estado_usuario' => 'required|integer',
            'primer_nombre' => 'required|string|max:100',
            'segundo_nombre' => 'nullable|string|max:100',
            'primer_apellido' => 'required|string|max:100',
            'segundo_apellido' => 'nullable|string|max:100',
            'correo_electronico' => 'required|email|unique:tbl_usuarios,correo_electronico',
            'contrasenia' => 'required|string|min:6',
            'fecha_registro' => 'nullable|date',
            'foto_perfil' => 'nullable|string'
        ]);

        $usuario = TBL_Usuarios::create($validated);

        return response()->json($usuario, 201);
    }

    /**
     * Actualizar un usuario
     */
    public function update(Request $request, $id)
    {
        $usuario = TBL_Usuarios::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $validated = $request->validate([
            'id_estado_usuario' => 'sometimes|integer',
            'primer_nombre' => 'sometimes|string|max:100',
            'segundo_nombre' => 'nullable|string|max:100',
            'primer_apellido' => 'sometimes|string|max:100',
            'segundo_apellido' => 'nullable|string|max:100',
            'correo_electronico' => 'sometimes|email|unique:tbl_usuarios,correo_electronico,' . $usuario->id_usuario . ',id_usuario',
            'contrasenia' => 'sometimes|string|min:6',
            'fecha_registro' => 'nullable|date',
            'foto_perfil' => 'nullable|string'
        ]);

        $usuario->update($validated);

        return response()->json($usuario, 200);
    }

    /**
     * Eliminar un usuario
     */
    public function destroy($id)
    {
        $usuario = TBL_Usuarios::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
}
