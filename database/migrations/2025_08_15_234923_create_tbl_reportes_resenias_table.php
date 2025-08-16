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
        Schema::create('tbl_reportes_resenias', function (Blueprint $table) {
            $table->increments('id_reporte');
            $table->integer('id_estado_reporte');
            $table->integer('id_usuario_reporta');
            $table->integer('id_usuario_moderador');
            $table->integer('id_resenia');
            $table->string('motivo', 100);
            $table->string('comentario', 255);
            $table->date('fecha_reporte');

            $table->foreign('id_estado_reporte')
                ->references('id_estado')
                ->on('tbl_estados')
                ->onDelete('cascade');

            $table->foreign('id_usuario_reporta')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_usuario_moderador')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_resenia')
                ->references('id_resenia')
                ->on('tbl_resenias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_reportes_resenias');
    }
};
