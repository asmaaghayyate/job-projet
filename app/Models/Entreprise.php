<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adresse',
        'image',
        'description',
        'user_id',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function annances()
    {
        return $this->hasMany(Annance::class);
    }

}
