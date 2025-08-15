<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TBL_Logs extends Model
{
protected $table = "tbl_logs";
    protected $primaryKey = "id_log";
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = "int";

    protected $fillable = [
        "id_usuario",
        "id_accion_ejecutada",
        "fecha_hora",
        "ip_origen",
    ];

    public function usuario()
    {
        return $this->belongsTo(TBL_Usuarios::class, "id_usuario", "id_usuario");
    }

    public function accionTomada()
    {
        return $this->belongsTo(TBL_Acciones_Tomadas::class, "id_accion_ejecutada", "id_accion_tomada");
    }
}
