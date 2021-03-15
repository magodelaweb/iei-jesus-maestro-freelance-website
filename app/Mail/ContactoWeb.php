<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoWeb extends Mailable
{
    use Queueable, SerializesModels;
    protected $contactoWeb;
    public function __construct($contactoWeb)
    {
        $this->contactoWeb=$contactoWeb;
    }

    public function build()
    {
        return $this->replyTo($this->contactoWeb->email,$this->contactoWeb->name)
        ->view('mail.contacto')
        ->with([
                 'name' => $this->contactoWeb->name,
                 'email' => $this->contactoWeb->email,
                 'phone' => $this->contactoWeb->phone,
                 'consulta' => $this->contactoWeb->question,
               ]);
    }
}
