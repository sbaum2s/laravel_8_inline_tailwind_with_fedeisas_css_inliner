<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatisticsMail extends Mailable
{
    use Queueable, SerializesModels;

    private $headline;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($headline)
    {
        $this->headline = $headline;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hello@me.com', 'This is my name')
            ->subject($this->headline)
            ->markdown('mail.statistics');
    }
}
