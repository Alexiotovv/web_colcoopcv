<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMensaje extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;

    /**
     * Create a new message instance.
     */
    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($this->datos['email'], $this->datos['nombre'])
                    ->subject('Nuevo mensaje de contacto: ' . $this->datos['asunto'])
                    ->view('emails.contacto')
                    ->with(['datos' => $this->datos]);
    }
}