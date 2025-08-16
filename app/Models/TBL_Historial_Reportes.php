<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Historial_Reportes extends Model
{
    protected $table = 'tbl_historial_reportes';
    protected $primaryKey = 'id_historial';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_reporte',
        'estado_anterior',
        'estado_nuevo',
        'fecha_cambio',
        'comentarios'
    ];
}
