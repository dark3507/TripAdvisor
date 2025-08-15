<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Usuarios_X_Roles extends Model
{
protected $table = "tbl_usuarios_x_roles";
    public $timestamps = false;
    public $incrementing = false; // porque la PK es compuesta
    protected $primaryKey = null; // Laravel no maneja PK compuesta de forma nativa

    protected $fillable = [
        "id_usuario",
        "id_rol",
        "fecha_asignacion",
        "fecha_fin",
    ];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo(TBL_Usuarios::class, "id_usuario", "id_usuario");
    }

    public function rol()
    {
        return $this->belongsTo(TBL_Roles_Usuarios::class, "id_rol", "id_rol");
    }
}
