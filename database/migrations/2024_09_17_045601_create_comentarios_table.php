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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publicacion_id');
            $table->foreign('publicacion_id')->references('id')->on('publicaciones')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id')->nullable(); // null si es anonimo
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('set null');
            $table->string('nombre')->nullable(); // nombre si es anonimo
            $table->string('correo')->nullable(); // correo si es anonimo
            $table->text('body');
            $table->boolean('aprobado')->default(false); // por defectoo esta aprobado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
