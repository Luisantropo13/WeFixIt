<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $infoMail;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    { 
        $this->infoMail = $data;
        $this->subject = $data[ "title"];
    }
    /**
     * Build the message.
     *
     * @return $this
     */


    public function sendMail( ) 
    {
        Mail::to( $this->infoMail[ "subject"] )->send($this);
    }

    public function build()
    {
        
        return $this->view( $this->infoMail[ "view"] , [ "data" => $this->infoMail ] );
    }

    public static function createMail( $data ) 
    {
        $correo = new ContactMail( $data );
        $correo->sendMail( );
    }
}
