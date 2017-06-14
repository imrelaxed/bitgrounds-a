<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TicketReply extends Notification
{
    use Queueable;
    protected $comment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('RE: Ticket ID: ' . $this->comment->ticket->ticket_id . ' ' . $this->comment->ticket->title)
            ->success()
            ->line( 'The support team has replied to your ticket.')
            ->line('Reply: '. $this->comment->comment)
            ->line( 'Title: '. $this->comment->ticket->title)
            ->line('Priority: '. $this->comment->ticket->priority)
            ->line('Status: '. $this->comment->ticket->status)
            ->line('You can visit your ticket at anytime by clicking the link below:')
            ->action('View Ticket', url('ticket/'. $this->comment->ticket->ticket_id));

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
