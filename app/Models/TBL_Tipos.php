<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Tipos extends Model
{
    protected $table = "tbl_tipos";
    protected $primaryKey = "id_tipo";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "id_clasificacion_tipo",
        "nombre_tipo",
        "descripcion"
    ];
}
