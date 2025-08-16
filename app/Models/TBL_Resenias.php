<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Resenias extends Model
{
    protected $table = 'tbl_resenias';
    protected $primaryKey = 'id_resenia';
    public $incrementing = true;
    public $timestamps = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id_usuario',
        'id_lugar',
        'titulo',
        'contenido',
        'fecha',
    ];
}
