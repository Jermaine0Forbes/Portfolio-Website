<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMark extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $mail;
    public function __construct($data)
    {
       $this->mail = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   $m = $this->mail;
        return $this->from($m["email"])
            ->to("jermaine0forbes@gmail.com")
            ->subject($m["subject"])
            ->markdown('email.mark',$m);
    }
}
