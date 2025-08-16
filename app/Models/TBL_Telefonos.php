<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Telefonos extends Model
{
protected $table = 'tbl_telefonos';
    protected $primaryKey = 'id_telefono';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_tipo_telefono',
        'numero_telefono',
        'es_principal',
        'fecha_registro',
        'observacion'
    ];
}
