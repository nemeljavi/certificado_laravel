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
        Schema::create('idiomas', function (Blueprint $table) {
            $table->id();
            $table->string('idioma');
            $table->foreignId("alumno_id")->references("id")->on("alumnos")->cascadeOnDelete();
// $table->foreignId("alumno_id")->constrained("alumnos")->cascadeOnDelete();  TAMBIEN SERVIRÍA ESTA OPCION //

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idiomas');
    }
};
