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
        Schema::create('tbl_telefonos', function (Blueprint $table) {
            $table->increments('id_telefono');
            $table->integer('id_tipo_telefono');
            $table->string('numero_telefono', 20);
            $table->char('es_principal', 1)->nullable();
            $table->date('fecha_registro');
            $table->string('observacion', 150)->nullable();

            $table->foreign('id_tipo_telefono')
                ->references('id_tipo')
                ->on('tbl_tipos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_telefonos');
    }
};
