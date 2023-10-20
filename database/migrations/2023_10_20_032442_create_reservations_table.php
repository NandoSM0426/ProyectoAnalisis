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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('User_id')
                ->constrained('users')
                ->name('user_reservation_foreign'); // Nombre único para la restricción de usuario
            $table->foreignId('Office_id')
                ->constrained('offices')
                ->name('office_reservation_foreign'); // Nombre único para la restricción de oficina
            $table->date('Fecha_inicio_reserva');
            $table->date('Fecha_fin_reserva');
            $table->string('InformacionDePago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
