<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Clasificaciones_Estados extends Model
{
    protected $table = 'tbl_clasificaciones_estados';
    protected $primaryKey = 'id_clasificacion_estado';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_clasificacion_estado'
    ];
}
