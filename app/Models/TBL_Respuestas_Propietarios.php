<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Respuestas_Propietarios extends Model
{
    protected $table = 'tbl_respuestas_propietarios';
    protected $primaryKey = 'id_respuesta';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_resenia',
        'id_propietario',
        'respuesta',
        'fecha_respuesta',
    ];
}
