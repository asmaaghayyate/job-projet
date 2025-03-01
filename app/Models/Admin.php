<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasRoles;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Si tu as des méthodes supplémentaires ou des relations, ajoute-les ici
}
