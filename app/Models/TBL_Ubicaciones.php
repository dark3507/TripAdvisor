<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Ubicaciones extends Model
{
    protected $table = 'tbl_ubicaciones';
    protected $primaryKey = 'id_tipo';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_tipo_ubicacion',
        'nombre',
        'id_ubicacion_padre'
    ];
}
