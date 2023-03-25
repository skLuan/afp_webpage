<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForAdmin extends Mailable
{
    use Queueable, SerializesModels;

    // public $projectName;
    // public $ubication;
    // public $projecDimentions;
    // public $customerName;
    // public $email;
    // public $phone;
    // public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public $projectName, public $ubication, public $projecDimentions, public $customerName, public $email, public $phone, public $msn)
    {
        //
        // $this->projectName = $projectName;
        // $this->ubication = $ubication;
        // $this->projecDimentions = $projecDimentions;
        // $this->customerName = $customerName;
        // $this->email = $email;
        // $this->phone = $phone;
        // $this->message = $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Armor Fiber new lead!',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.forAdmin',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
