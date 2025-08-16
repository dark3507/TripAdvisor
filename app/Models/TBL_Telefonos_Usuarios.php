<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Telefonos_Usuarios extends Model
{
protected $table = 'tbl_telefonos_usuarios';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = null;

    protected $fillable = [
        'id_telefono',
        'id_usuario',
    ];
}
