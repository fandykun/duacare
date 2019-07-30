<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DLDEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $dld;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dld)
    {
        $this->dld = $dld;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $dld = $this->dld;
        return $this->from('dld@duacare.org')
            ->subject('Duacare')
            ->view('mail', compact('dld'));
    }
}
