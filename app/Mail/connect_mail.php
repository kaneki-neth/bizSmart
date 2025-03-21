<?php

namespace App\Mail;

use App\Models\connect_model;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class connect_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $connect;

    /**
     * Create a new message instance.
     */
    public function __construct(connect_model $connect)
    {
        $this->connect = $connect;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('MATIX Inquiry: ' . $this->connect->purpose)
                    ->view('connect.connect_nmail');
    }
}