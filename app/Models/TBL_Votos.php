<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Votos extends Model
{
    protected $table = 'tbl_votos';
    protected $primaryKey = 'id_voto';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_usuario',
        'id_resenia',
        'util',
    ];
}
