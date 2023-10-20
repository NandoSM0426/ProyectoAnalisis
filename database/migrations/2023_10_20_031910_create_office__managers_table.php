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
        Schema::create('office__managers', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Correo');
            $table->string('NombreDeUsuario');
            $table->string('Contraseña');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office__managers');
    }
};
