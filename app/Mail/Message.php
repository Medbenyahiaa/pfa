<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $nomDonateur;
     public $prenomDonateur;
     public $tel;

    public function __construct($nomDonateur , $prenomDonateur , $tel)
    {
        $this->nomDonateur = $nomDonateur;
        $this->prenomDonateur = $prenomDonateur;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message');
    }
}
