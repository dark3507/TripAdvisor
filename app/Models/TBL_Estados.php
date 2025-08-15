<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Estados extends Model
{
    protected $table = "tbl_estados";
    protected $primaryKey = "id_estado";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "id_clasificacion_estado",
        "nombre_estado",
        "descripcion"
    ];
}
