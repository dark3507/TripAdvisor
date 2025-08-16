<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Telefonos_Lugares extends Model
{
    protected $table = 'tbl_telefonos_lugares';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = null;

    protected $fillable = [
        'id_telefono',
        'id_lugar',
    ];
}
