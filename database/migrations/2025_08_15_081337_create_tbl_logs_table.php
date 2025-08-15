<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_logs', function (Blueprint $table) {
            $table->integer('id_log');
            $table->integer('id_usuario');
            $table->integer('id_accion_ejecutada');
            $table->dateTime('fecha_hora')->nullable();
            $table->string('ip_origen', 11)->nullable();

            $table->foreign("id_usuario")
                ->references("id_usuario")
                ->on("tbl_usuarios")
                ->onDelete("cascade");

            $table->foreign("id_accion_ejecutada")
                ->references("id_accion_tomada")
                ->on("tbl_acciones_tomadas")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_logs');
    }
};
