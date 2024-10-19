<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Annance;
use App\Models\Entreprise;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Asmaa ghayyate',
             'email' => 'asmaa@gmail.com',
             'password' => bcrypt('password')
         ]);

        $this->call([
            AdminUserSeeder::class,
            // Ajoute d'autres seeders ici si nécessaire
        ]);


        \App\Models\User::factory()
        ->count(2)
        ->has(Entreprise::factory()->count(4) // Chaque utilisateur a 2 entreprises
            ->has(Annance::factory()->count(10) // Chaque entreprise a 3 annonces
            )
        )
        ->create();



    }
}
