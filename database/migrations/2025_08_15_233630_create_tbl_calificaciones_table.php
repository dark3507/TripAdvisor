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
        Schema::create('tbl_calificaciones', function (Blueprint $table) {
            $table->increments('id_calificacion');
            $table->integer('id_tipo_calificacion');
            $table->integer('id_resenia');
            $table->decimal('puntaje', 2, 1);
            $table->string('comentario', 150);

            $table->foreign('id_tipo_calificacion')
                ->references('id_tipo')
                ->on('tbl_tipos')
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
        Schema::dropIfExists('tbl_calificaciones');
    }
};
