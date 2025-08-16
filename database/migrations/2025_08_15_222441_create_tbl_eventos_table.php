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
        Schema::create('tbl_eventos', function (Blueprint $table) {
            $table->increments('id_evento');
            $table->integer('id_estado_evento');
            $table->integer('id_lugar');
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('precio', 8, 2);

            $table->foreign('id_estado_evento')
                ->references('id_estado')
                ->on('tbl_estados')
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
        Schema::dropIfExists('tbl_eventos');
    }
};
