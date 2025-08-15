<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Acciones_Tomadas extends Model
{
    protected $table = "tbl_acciones_tomadas";
    protected $primaryKey = "id_accion_tomada";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "nombre_accion_tomada"
    ];
}
