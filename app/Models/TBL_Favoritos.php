<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Favoritos extends Model
{
    protected $table = 'tbl_favoritos';
    public $timestamps = false;
    public $incrementing = false; // porque la PK es compuesta
    protected $primaryKey = null;

    protected $fillable = [
        'id_usuario',
        'id_lugar',
        'fecha_agregado'
    ];
}
