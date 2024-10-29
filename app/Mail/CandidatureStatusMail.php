<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CandidatureStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $candidat;
    public $etat;
    public $employeurEmail;
    public function __construct($candidat, $etat,$employeurEmail)
    {
        $this->candidat = $candidat;
        $this->etat = $etat;
        $this->employeurEmail = $employeurEmail;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Candidature Status Mail',
            from: $this->employeurEmail  // Utilisez ici le nom de l'employeur
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'content.emplois.status_candidature',
        );
    }

    // public function build()
    // {
    //     return $this->from($this->employeurEmail) // Utilisez l'email et le nom de l'employeur
    //                 ->subject('Statut de votre candidature')
    //                 ->view('content.emplois.status_candidature') ;
    // }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
