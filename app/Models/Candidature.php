<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'annonce_id',
        'lettre_motivation',

    ];

}
