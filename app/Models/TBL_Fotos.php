<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Fotos extends Model
{
    protected $table = 'tbl_fotos';
    protected $primaryKey = 'id_foto';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_tipo_foto',
        'id_usuario',
        'id_lugar',
        'url_imagen',
        'fecha_subida',
        'descripcion'
    ];
}
