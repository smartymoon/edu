<?php

namespace App\Mail;

use App\Invitation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected string $school_name;
    protected string $principal_name;
    protected string $slug;


    public function __construct(Invitation $invitation)
    {
        $this->school_name = $invitation->school->name;
        $this->principal_name = $invitation->principal->name;
        $this->slug = $invitation->slug;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.invitation', [
            'message' => "I am {$this->principal_name},  principal of {$this->school_name}. Welcome to our school, click the button below to join us",
            'url' => route('invitation', [
                'slug' => $this->slug
            ])
        ]);
    }
}
