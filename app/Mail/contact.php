<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        protected $name,
        protected $email,
        protected $comment,


    )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact', [
            'name' => $this->name,
            'comment' => $this->comment,
            'email' => $this->email,

        ])->subject('Hummingbird - '.$this->email.' Enquiry Form |' . $this->comment );
    }
}
