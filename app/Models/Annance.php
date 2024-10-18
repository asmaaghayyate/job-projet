<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annance extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'slug',
        'user_id',
        'entreprise_id',
        'etat',
        'categorie',
        'ville',
        'type_emploi'
    ];

    // Relation avec le modèle User (ou Employeur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }


public function entreprise(){
    return $this->belongsTo(Entreprise::class);
}



// public function getrouteKeyName(){
//     return 'slug';
// }

}
