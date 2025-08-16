<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Lugares extends Model
{
    protected $table = 'tbl_lugares';
    protected $primaryKey = 'id_lugar';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_categoria',
        'id_ubicacion',
        'nombre',
        'descripcion',
        'direccion',
        'latitud',
        'longitud',
        'sitio_web'
    ];
}
