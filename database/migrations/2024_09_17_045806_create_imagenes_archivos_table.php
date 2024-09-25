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
        Schema::create('imagenes_archivos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_archivos');
            $table->string('ruta_archivos');
            $table->string('tipo_archivo');
            $table->unsignedBigInteger('size'); // tamaño del archivo en bytes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes_archivos');
    }
};
