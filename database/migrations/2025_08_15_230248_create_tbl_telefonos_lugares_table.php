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
        Schema::create('tbl_telefonos_lugares', function (Blueprint $table) {
            $table->integer('id_telefono');
            $table->integer('id_lugar');

            $table->primary(['id_telefono', 'id_lugar']);

            $table->foreign('id_telefono')
                ->references('id_telefono')
                ->on('tbl_telefonos')
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
        Schema::dropIfExists('tbl_telefonos_lugares');
    }
};
