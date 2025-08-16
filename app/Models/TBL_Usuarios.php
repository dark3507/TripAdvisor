<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Usuarios extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_estado_usuario',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'correo_electronico',
        'contrasenia',
        'fecha_registro',
        'foto_perfil'
    ];
}
