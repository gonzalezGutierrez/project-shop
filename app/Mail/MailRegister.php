<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $user,$token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.register')
            ->from('163174@ids.upchiapas.edu.mx')
            ->subject('Activación de cuenta Myibu');
    }
}
