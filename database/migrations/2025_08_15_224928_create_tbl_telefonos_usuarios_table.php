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
        Schema::create('tbl_telefonos_usuarios', function (Blueprint $table) {
            $table->integer('id_telefono');
            $table->integer('id_usuario');

            $table->primary(['id_telefono', 'id_usuario']);

            $table->foreign('id_telefono')
                ->references('id_telefono')
                ->on('tbl_telefonos')
                ->onDelete('cascade');

            $table->foreign('id_usuario')
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
        Schema::dropIfExists('tbl_telefonos_usuarios');
    }
};
