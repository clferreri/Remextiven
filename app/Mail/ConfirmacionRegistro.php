<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmacionRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $enlaceActivacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->enlaceActivacion = "Soy el enlace de activacion";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmarRegistro');
    }
}
