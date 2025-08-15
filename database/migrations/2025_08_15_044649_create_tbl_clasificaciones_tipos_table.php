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
        Schema::create('tbl_clasificaciones_tipos', function (Blueprint $table) {
            $table->increments("id_clasificacion_tipo");
            $table->string("nombre_clasificacion_tipo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_clasificaciones_tipos');
    }
};
