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
        Schema::create('tbl_respuestas_propietarios', function (Blueprint $table) {
            $table->increments('id_respuesta');
            $table->integer('id_resenia');
            $table->integer('id_propietario');
            $table->text('respuesta');
            $table->date('fecha_respuesta');

            $table->foreign('id_resenia')
                ->references('id_resenia')
                ->on('tbl_resenias')
                ->onDelete('cascade');

            $table->foreign('id_propietario')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_respuestas_propietarios');
    }
};
