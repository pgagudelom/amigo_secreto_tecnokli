<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('clave'); // Clave para acceder
            $table->foreignId('grupo_id')->constrained()->onDelete('cascade'); // Relación con el grupo
            $table->json('regalos'); // Lista de regalos (almacenada como JSON)
            $table->string('amigo_secreto')->nullable(); // Amigo secreto asignado
            $table->boolean('is_admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
