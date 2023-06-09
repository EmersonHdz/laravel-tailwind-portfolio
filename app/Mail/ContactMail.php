<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto;
    /**
     * Create a new message instance.
     */
    public function __construct(public string $contacto)
    {
        $this->contacto = $contacto;
    }

    
    

  public function build(){
    return $this->view('components.home.contact_send');
  }
}
