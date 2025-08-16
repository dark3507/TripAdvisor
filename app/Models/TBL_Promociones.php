<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Promociones extends Model
{
protected $table = 'tbl_promociones';
    protected $primaryKey = 'id_promocion';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'descuento',
        'codigo_promocion'
    ];
}
