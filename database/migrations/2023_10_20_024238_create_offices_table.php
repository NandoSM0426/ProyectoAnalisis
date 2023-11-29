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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('Precio');
            $table->string('Ubicacion')->default('Sin ubicación');
            $table->boolean('Disponibilidad')->nullable()->default(true);
            $table->string('nombre')->default(null);
            $table->string('descripcion')->default(null);
            //$table->text('imagen')->nullable();
            string('imagen')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
