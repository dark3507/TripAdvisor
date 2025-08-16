<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Mensajes_Reservas extends Model
{
    protected $table = 'tbl_mensajes_reservas';
    protected $primaryKey = 'id_mensaje';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_estado_mensaje',
        'id_reserva',
        'fecha_envio',
        'mensaje',
    ];
}
