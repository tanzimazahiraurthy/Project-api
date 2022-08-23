<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $body;
    public $sub;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($e_sub, $e_body)
    {
        //
        $this->sub = $e_body;
        $this->body = $e_sub;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->sub)->view('customer.mail')->with('body', $this->body);
        //return $this->view('view.name');
    }
}
