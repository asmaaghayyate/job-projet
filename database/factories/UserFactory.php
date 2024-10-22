<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected   $annees_experiences = [
        "Débutant",
        "Moins de 1 an",
        "De 1 à 3 ans",
        "De 3 à 5 ans",
        "De 5 à 10 ans",
        "De 10 à 20 ans",
        "Plus de 20 ans"
    ];

    protected    $niveau_etude = [
        "Autodidacte",
        "Qualification avant Bac",
        "Bac",
        "Bac +1",
        "Bac +2",
        "Bac +3",
        "Bac +4",
        "Bac +5 et plus"
    ];

    public function definition(): array
    {

        // $filePath = 'pdfs/' . uniqid() . '.pdf';
        // Storage::put($filePath, $pdf->output());

        return [
           'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'cv' => $this->faker->sentence(),
            'sexe' => $this->faker->randomElement(['Homme', 'Femme']),
            'niveau_etude' => $this->faker->randomElement($this->niveau_etude),
            'annees_experiences' => $this->faker->randomElement($this->annees_experiences),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
