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
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->increments("id_usuario");
            $table->integer("id_estado_usuario");
            $table->string("primer_nombre", 50);
            $table->string("segundo_nombre", 50);
            $table->string("primer_apellido", 50);
            $table->string("segundo_apellido", 50);
            $table->string("correo_electronico", 100);
            $table->string("contrasenia", 15);
            $table->date("fecha_registro");
            $table->binary("foto_perfil");

            $table->foreign("id_estado_usuario")
                ->references("id_estado")
                ->on("tbl_estados")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuarios');
    }
};
