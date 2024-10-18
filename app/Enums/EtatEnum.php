<?php

namespace App\Enums;

enum EtatEnum: string
{
    case EN_ATTENTE = 'en attente';
    case FERMEE = 'fermée';
    case PUBLIEE = 'publiée';



    public static function getColor(string $etat): string
    {
        return match ($etat) {
            self::PUBLIEE->value => 'success',
            self::EN_ATTENTE->value => 'warning',
            self::FERMEE->value => 'danger',
            default => 'transparent', // Fallback color
        };
    }



}
