<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Roles_Usuarios extends Model
{
    protected $table = "tbl_roles_usuarios";
    protected $primaryKey = "id_rol";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "nombre",
    ];

    public function usuarios()
    {
        return $this->belongsToMany(
            TBL_Usuarios::class,
            "tbl_usuarios_x_roles",
            "id_rol",
            "id_usuario"
        )->withPivot("fecha_asignacion", "fecha_fin");
    }
}
