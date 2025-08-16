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
        Schema::create('tbl_fotos', function (Blueprint $table) {
            $table->increments('id_foto');
            $table->integer('id_tipo_foto');
            $table->integer('id_usuario');
            $table->integer('id_lugar');
            $table->string('url_imagen', 150);
            $table->date('fecha_subida');
            $table->text('descripcion');

            $table->foreign('id_tipo_foto')
                ->references('id_tipo')
                ->on('tbl_tipos')
                ->onDelete('cascade');

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
        Schema::dropIfExists('tbl_fotos');
    }
};
