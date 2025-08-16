<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Reportes_Resenias extends Model
{
    protected $table = 'tbl_reportes_resenias';
    protected $primaryKey = 'id_reporte';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_estado_reporte',
        'id_usuario_reporta',
        'id_usuario_moderador',
        'id_resenia',
        'motivo',
        'comentario',
        'fecha_reporte',
    ];
}
