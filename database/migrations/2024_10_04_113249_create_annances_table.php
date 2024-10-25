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
        Schema::create('annances', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId(column: 'entreprise_id')->nullable()->constrained('entreprises')->onDelete('cascade');
            $table->string('slug')->unique(); // Champ slug
            $table->string('titre'); // Titre de l'annonce
            $table->text('description'); // Description de l'annonce
            $table->enum('etat', ['publiée', 'en attente', 'fermée'])->default('en attente');
            $table->string('ville');
            $table->string('categorie');
            $table->string('type_emploi');
            $table->boolean('is_blocked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annances');
    }
};
