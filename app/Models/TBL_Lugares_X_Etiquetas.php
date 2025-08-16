<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Lugares_X_Etiquetas extends Model
{
    protected $table = 'tbl_lugares_x_etiquetas';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = null;

    protected $fillable = [
        'id_lugar',
        'id_etiqueta',
    ];
}
