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
        Schema::create('tbl_ubicaciones', function (Blueprint $table) {
            $table->increments('id_ubicacion');
            $table->integer('id_tipo_ubicacion');
            $table->string('nombre', 100);
            $table->integer('id_ubicacion_padre');

            $table->foreign('id_tipo_ubicacion')
                ->references('id_tipo')
                ->on('tbl_tipos')
                ->onDelete('cascade');

            $table->foreign('id_ubicacion_padre')
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
        Schema::dropIfExists('tbl_ubicaciones');
    }
};
