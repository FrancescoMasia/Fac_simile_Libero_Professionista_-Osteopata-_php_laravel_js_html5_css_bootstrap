<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user_date;

    /**
     * Create a new message instance.
     */
    public function __construct($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * Get the message envelope. la BUSTA
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@mail.com', 'Admin'),
            subject: 'Grazie per averci contattato',
        );
    }

    /**
     * Get the message content definition. CONTENUTO
     */
    public function content(): Content
    {
        return new Content( //VISTA CONTENUTO DELLA MAIL
            view: 'mail.contact-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
