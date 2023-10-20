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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NumeroDeTelefono');
            $table->string('Correo');
            $table->string('Constraseña'); // Asegúrate de que sea "Contraseña" en lugar de "Constraseña".
            $table->string('Nombre');
            $table->string('Apellido1');
            $table->string('Apellido2');
            $table->string('Edad');
            $table->string('Nacionalidad');
            // Esta columna define el tipo de usuario que se registrará en la aplicación
            $table->enum('Tipo', ['Comun', 'Arrendador']);
            $table->timestamps(); // No se pasan argumentos, se encargará de created_at y updated_at automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

