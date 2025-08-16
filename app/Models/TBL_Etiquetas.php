<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Etiquetas extends Model
{
    protected $table = 'tbl_etiquetas';
    protected $primaryKey = 'id_etiqueta';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_etiqueta',
        'descripcion'
    ];
}
