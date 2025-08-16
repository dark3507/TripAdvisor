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
        Schema::create('tbl_acciones_moderaciones', function (Blueprint $table) {
            $table->increments('id_accion_moderacion');
            $table->integer('id_reporte');
            $table->integer('id_accion_tomada');
            $table->date('fecha_accion');
            $table->string('observaciones', 150);

            $table->foreign('id_reporte')
                ->references('id_reporte')
                ->on('tbl_reportes_resenias')
                ->onDelete('cascade');

            $table->foreign('id_accion_tomada')
                ->references('id_accion_tomada')
                ->on('tbl_acciones_tomadas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_acciones_moderaciones');
    }
};
