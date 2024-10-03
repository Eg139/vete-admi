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
        Schema::create('vaccination', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->string('vaccine_name');
            $table->date('vaccination_date');
            $table->date('expiration_date')->nullable(); // Campo de expiración
            $table->text('notes')->nullable(); // Notas adicionales sobre la vacuna
            $table->timestamps();

            // Relación con el modelo Pet
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination');
    }
};

