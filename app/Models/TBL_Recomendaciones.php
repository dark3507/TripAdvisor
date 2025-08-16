<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Recomendaciones extends Model
{
    protected $table = 'tbl_recomendaciones';
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'id_usuario',
        'id_lugar',
        'puntaje',
        'motivo',
        'fecha_creada',
    ];
}
