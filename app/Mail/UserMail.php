<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable {

    use Queueable,
        SerializesModels;

    public $contenido;
    public $name;
    public $correo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenido, $name, $correo) {
        $this->contenido = $contenido;
        $this->name = $name;
        $this->correo = $correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('subvistas.mail.mail')->from($this->correo)->subject($this->contenido);
    }
    
 

}
