<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Clasificaciones_Tipos extends Model
{
    protected $table = "tbl_clasificaciones_tipos";
    protected $primaryKey = "id_clasificacion_tipo";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "nombre_clasificacion_tipo"
    ];
}
