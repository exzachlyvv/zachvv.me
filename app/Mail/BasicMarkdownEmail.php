<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BasicMarkdownEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $markdown)
    {
        //
        $this->subject = $subject;
        $this->body = $markdown;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.markdown');
    }
}
