<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Reservas extends Model
{
    protected $table = 'tbl_reservas';
    protected $primaryKey = 'id_reserva';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_estado_reserva',
        'id_cliente',
        'id_empleado',
        'id_lugar',
        'cantidad_personas',
        'precio',
        'id_metodo_pago',
        'esta_pagado',
        'fecha_solicitud',
        'fecha_reserva',
    ];
}
