<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $response;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $response)
    {
        $this->message = $message;
        $this->response = $response;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Response to Your Inquiry')
            ->view('emails.admin_response')
            ->with([
                'messageData' => $this->message,
                'responseText' => $this->response,
            ]);
    }
}
