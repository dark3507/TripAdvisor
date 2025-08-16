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
        Schema::create('tbl_historial_reportes', function (Blueprint $table) {
            $table->increments('id_historial');
            $table->integer('id_reporte');
            $table->string('estado_anterior', 100);
            $table->string('estado_nuevo', 100);
            $table->date('fecha_cambio');
            $table->string('comentarios', 150);

            $table->foreign('id_reporte')
                ->references('id_reporte')
                ->on('tbl_reportes_resenias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_historial_reportes');
    }
};
