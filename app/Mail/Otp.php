<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Otp extends Mailable
{
    use Queueable, SerializesModels;

    protected $otp;
    protected $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, $token)
    {
        $this->otp = $otp;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Verification Mail')
            ->view('mails.otp', [
                'otp' => $this->otp,
                'token' => $this->token
            ]);
    }
}
