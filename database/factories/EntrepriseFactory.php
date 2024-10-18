<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(), // Nom de l'entreprise
            'adresse' => $this->faker->address(), // Adresse
            'image' => $this->faker->imageUrl(640, 480, 'business'), // URL d'une image
            'description' => $this->faker->paragraph(), // Description
            'user_id' => User::factory(), // Crée un utilisateur associé
        ];
    }
}
