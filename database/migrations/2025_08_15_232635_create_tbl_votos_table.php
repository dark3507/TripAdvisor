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
        Schema::create('tbl_votos', function (Blueprint $table) {
            $table->increments('id_voto');
            $table->integer('id_usuario');
            $table->integer('id_resenia');
            $table->char('util', 1);

            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('tbl_usuarios')
                ->onDelete('cascade');

            $table->foreign('id_resenia')
                ->references('id_resenia')
                ->on('tbl_resenias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_votos');
    }
};
