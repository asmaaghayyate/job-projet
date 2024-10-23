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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('social_id')->nullable(); // Rendre ce champ nullable
            $table->string('social_type')->nullable();
            // $table->enum('role', ['admin', 'employeur', 'candidat']);
            $table->string('phone', 20)->nullable();
            $table->string('cv')->nullable();
            $table->string('sexe')->nullable();
            $table->string('niveau_etude')->nullable();
            $table->string('annees_experiences')->nullable();
            $table->boolean('is_blocked')->default(false);
            $table->rememberToken();
            $table->timestamps();
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
