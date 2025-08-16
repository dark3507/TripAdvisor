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
        Schema::create('tbl_reservas', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->integer('id_estado_reserva');
            $table->integer('id_cliente');
            $table->integer('id_empleado');
            $table->integer('id_lugar');
            $table->integer('cantidad_personas');
            $table->decimal('precio', 10, 2);
            $table->integer('id_metodo_pago');
            $table->char('esta_pagado', 1);
            $table->date('fecha_solicitud');
            $table->date('fecha_reserva');

            $table->foreign('id_estado_reserva')
                ->references('id_estado')
                ->on('tbl_estados')
                ->onDelete('cascade');

            $table->foreign('id_cliente')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_empleado')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_lugar')
                ->references('id_lugar')
                ->on('tbl_lugares')
                ->onDelete('cascade');

            $table->foreign('id_metodo_pago')
                ->references('id_estado')
                ->on('tbl_estados')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_reservas');
    }
};
