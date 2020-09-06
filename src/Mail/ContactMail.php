<?php

namespace Kushal\ContactUs\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail_content ='';

    /**
     * Create a new message instance.
     *
     * @param $mail_content
     */
    public function __construct($mail_content)
    {
        $this->mail_content = $mail_content['mail_content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contactUs::emails.contact');
    }
}
