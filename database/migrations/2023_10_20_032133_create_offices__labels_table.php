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
        Schema::create('offices__labels', function (Blueprint $table) {
            $table->foreignId('Office_id')->constrained('offices')
                ->index('office_id_foreign'); // Nombre único para la restricción
            $table->foreignId('Tag_id')->constrained('tags')
                ->index('tag_id_foreign'); // Nombre único para la restricción
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices__labels');
    }
};
