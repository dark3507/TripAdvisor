<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Eventos extends Model
{
    protected $table = 'tbl_eventos';
    protected $primaryKey = 'id_evento';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_estado_evento',
        'id_lugar',
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'precio'
    ];
}
