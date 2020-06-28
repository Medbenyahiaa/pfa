<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Demande extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public  $nom;
    public $prenom;
    public $email;
    public $role;
public function __construct($nom , $prenom , $email , $role)
{
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->role = $role;
}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.demande');
    }
}
