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
        Schema::create('tbl_lugares', function (Blueprint $table) {
            $table->increments('id_lugar');
            $table->integer('id_categoria');
            $table->integer('id_ubicacion');
            $table->string('nombre', 150);
            $table->text('descripcion');
            $table->text('direccion');
            $table->decimal('latitud', 10, 8);
            $table->decimal('longitud', 11, 8);
            $table->string('sitio_web', 150);

            $table->foreign('id_categoria')
                ->references('id_tipo')
                ->on('tbl_tipos')
                ->onDelete('cascade');

            $table->foreign('id_ubicacion')
                ->references('id_ubicacion')
                ->on('tbl_ubicaciones')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lugares');
    }
};
