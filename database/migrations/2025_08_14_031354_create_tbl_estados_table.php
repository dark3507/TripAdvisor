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
        Schema::create('tbl_estados', function (Blueprint $table) {
            $table->integer('id_estado');
            $table->integer('id_clasificacion_estado');
            $table->string('nombre_estado', 50);
            $table->text('descripcion');

            $table->foreign('id_clasificacion_estado')
                ->references('id_clasificacion_estado')
                ->on('tbl_clasificaciones_estados')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_estados');
    }
};
