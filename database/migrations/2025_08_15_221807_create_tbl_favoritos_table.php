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
        Schema::create('tbl_favoritos', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->integer('id_lugar');
            $table->date('fecha_agregado');

            $table->primary(['id_usuario', 'id_lugar']);

            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_lugar')
                ->references('id_lugar')
                ->on('tbl_lugares')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_favoritos');
    }
};
