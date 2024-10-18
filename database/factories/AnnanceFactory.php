<?php

namespace Database\Factories;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $villes = [
        "Toutes les villes",
        "Agadir",
        "Al Hoceima",
        "Aoussered",
        "Assilah",
        "Autre ville",
        "Azrou",
        "Ben Ahmed",
        "Benguerir",
        "Beni Mellal",
        "Benslimane",
        "Berkane",
        "Berrechid",
        "Boujdour",
        "Bouskoura",
        "Bouznika",
        "Casablanca",
        "Chafchaouen",
        "Dakhla",
        "Deroua",
        "El Hajeb",
        "El Jadida",
        "Errachidia",
        "Essaouira",
        "Essmara",
        "Fès",
        "Fkih Ben Salah",
        "Guelmim",
        "Guercif",
        "Ifrane",
        "Imouzzer Kandar",
        "Kénitra",
        "Kabila",
        "Khemisset",
        "Khenifra",
        "Khouribga",
        "Ksar el Kebir",
        "Laayoune",
        "Larache",
        "Marrakech",
        "Martil",
        "Mediouna",
        "Meknès",
        "Melilia",
        "Midelt",
        "Mohammedia",
        "Nador",
        "Nouaceur",
        "Oualidia",
        "Ouarzazate",
        "Ouazzane",
        "Oujda",
        "Rabat",
        "Safi",
        "Saidia",
        "Salé",
        "Sebta",
        "Sefrou",
        "Settat",
        "Sidi Bennour",
        "Sidi Ifni",
        "Sidi Kacem",
        "Sidi Rahal",
        "Sidi Slimane",
        "Souk el Arbaa du Gharb",
        "Tamensourte",
        "Tamesna",
        "Tanger",
        "Tantan",
        "Tarfaya",
        "Taroudant",
        "Taza",
        "Temara",
        "Tetouan",
        "Tifelt",
        "Tinghir",
        "Tiznit",
        "Tout le Maroc",
        "Youssoufia",
        "Zagora"
    ];

    protected $categories = [
        "Développeurs Web",
        "Développeurs Mobiles",
        "Administrateurs Système",
        "Design et Création",
        "Designers Graphiques",
        "Photographe",
        "Rédaction et Marketing",
        "Rédacteurs",
        "Spécialistes en Marketing Digital",
        "Services aux Entreprises",
        "Assistants Virtuels",
        "Agents de Service Client",
        "Finance et Comptabilité",
        "Comptables",
        "Vente et Commercial",
        "Représentants Commerciaux",
        "Éducation et Formation",
        "Formateurs",
        "Santé et Bien-être",
        "Nutritionnistes"
    ];
    public function definition(): array
    {
        $titre = $this->faker->sentence();

        return [
            'titre' => $titre, // Titre aléatoire
           'description' => $this->faker->text(1000), // Description aléatoire
            'slug' => \Str::slug($titre), // Slug basé sur le titre
            'user_id' => User::factory(), // Crée un utilisateur associé
            'entreprise_id' => Entreprise::factory(), // Crée une entreprise associée
            'etat' => $this->faker->randomElement(['publiée', 'en attente', 'fermée']), // Valeurs précises pour l'état
            'categorie' => $this->faker->randomElement($this->categories), // Catégorie aléatoire
            'ville' => $this->faker->randomElement($this->villes), // Ville aléatoire
            'type_emploi' => $this->faker->randomElement(['temps plein', 'temps partiel', 'stage']), // Valeurs précises pour le type d'emploi
        ];
    }
}
