<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Calificaciones extends Model
{
    protected $table = 'tbl_calificaciones';
    protected $primaryKey = 'id_calificacion';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_tipo_calificacion',
        'id_resenia',
        'puntaje',
        'comentario',
    ];
}
