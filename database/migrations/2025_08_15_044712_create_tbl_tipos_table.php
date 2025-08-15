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
        Schema::create('tbl_tipos', function (Blueprint $table) {
            $table->increments("id_tipo");
            $table->integer("id_clasificacion_tipo");
            $table->string("nombre_tipo", 50);
            $table->text("descripcion");

            $table->foreign("id_clasificacion_tipo")
                ->references("id_clasificacion_tipo")
                ->on("tbl_clasificaciones_tipos")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tipos');
    }
};
