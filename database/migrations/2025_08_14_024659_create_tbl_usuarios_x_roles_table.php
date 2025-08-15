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
        Schema::create('tbl_usuarios_x_roles', function (Blueprint $table) {
            $table->increments("id_usuario");
            $table->increments("id_rol");
            $table->date("fecha_asignacion")->nullable();
            $table->date("fecha_fin")->nullable();

            $table->primary(["id_usuario", "id_rol"]); // PK compuesta

            $table->foreign("id_usuario")
                ->references("id_usuario")
                ->on("tbl_usuarios")
                ->onDelete("cascade");

            $table->foreign("id_rol")
                ->references("id_rol")
                ->on("tbl_roles_usuarios")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuarios_x_roles');
    }
};
