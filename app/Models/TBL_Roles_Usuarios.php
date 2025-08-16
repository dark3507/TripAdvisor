<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Roles_Usuarios extends Model
{
    protected $table = 'tbl_roles_usuarios';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
    ];
}
