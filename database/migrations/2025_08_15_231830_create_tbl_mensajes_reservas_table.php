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
        Schema::create('tbl_mensajes_reservas', function (Blueprint $table) {
            $table->increments('id_mensaje');
            $table->integer('id_estado_mensaje');
            $table->integer('id_reserva');
            $table->date('fecha_envio');
            $table->text('mensaje');

            $table->foreign('id_estado_mensaje')
                ->references('id_estado')
                ->on('tbl_estados')
                ->onDelete('cascade');

            $table->foreign('id_reserva')
                ->references('id_reserva')
                ->on('tbl_reservas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mensajes_reservas');
    }
};
