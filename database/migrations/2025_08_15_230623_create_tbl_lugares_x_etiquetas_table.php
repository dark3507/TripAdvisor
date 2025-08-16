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
        Schema::create('tbl_lugares_x_etiquetas', function (Blueprint $table) {
            $table->integer('id_lugar');
            $table->integer('id_etiqueta');

            $table->primary(['id_lugar', 'id_etiqueta']);

            $table->foreign('id_lugar')
                ->references('id_lugar')
                ->on('tbl_lugares')
                ->onDelete('cascade');

            $table->foreign('id_etiqueta')
                ->references('id_etiqueta')
                ->on('tbl_etiquetas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lugares_x_etiquetas');
    }
};
