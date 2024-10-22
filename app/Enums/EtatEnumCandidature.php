<?php

namespace App\Enums;

enum EtatEnumCandidature: string
{
    case EN_ATTENTE = 'en attente';
    case RECU = 'reçu';
    case EN_ATTENTE_ENTRETIEN = 'en attente entretien';
    case REFUSE = 'refusé';
    case ACCEPTE = 'accepté';


    public static function getColor(string $etat): string
    {
        return match ($etat) {
            self::EN_ATTENTE->value => 'warning',          // Jaune
            self::EN_ATTENTE_ENTRETIEN->value => 'entretien',   // Bleu
            self::RECU->value => 'recu',                 // Vert
            self::REFUSE->value => 'danger',                // Rouge
            self::ACCEPTE->value => 'success',           // Vert clair
            default => 'transparent',                       // Couleur par défaut
        };
    }



}
