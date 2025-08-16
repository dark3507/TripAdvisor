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
        Schema::create('tbl_promociones', function (Blueprint $table) {
            $table->integer('id_promocion');
            $table->decimal('descuento', 5, 2);
            $table->string('codigo_promocion', 15);

            $table->primary('id_promocion');

            $table->foreign('id_promocion')
                ->references('id_evento')
                ->on('tbl_eventos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_promociones');
    }
};
