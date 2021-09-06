<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class confirmacion extends Mailable
{
    use Queueable, SerializesModels;

    public $vkey;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vkeys)
    {
        $this->vkey=$vkeys;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correo');
    }
}
