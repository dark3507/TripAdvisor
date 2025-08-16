<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Acciones_Moderaciones extends Model
{
    protected $table = "tbl_acciones_moderaciones";
    protected $primaryKey = "id_accion_moderacion";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "id_reporte",
        "id_accion_tomada",
        "fecha_accion",
        "observaciones"
    ];
}
