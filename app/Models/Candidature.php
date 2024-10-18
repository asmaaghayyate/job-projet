<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'annance_id',
        'lettre_motivation',

    ];


    public function annance()
    {
        return $this->belongsTo(Annance::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}


}
