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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); // Référence à l'utilisateur
            $table->foreignId('annance_id')->nullable()->constrained('annances')->onDelete('cascade');
            $table->text('lettre_motivation')->nullable(); // Chemin de la lettre de motivation
            $table->enum('etat', ['en attente', 'reçu', 'en attente entretien', 'refusé', 'accepté'])
      ->default('en attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
