<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.order')
            ->from('jesus.gutierrez971225@gmail.com')
            ->subject('Orden generada Mydibu');;
    }
}
