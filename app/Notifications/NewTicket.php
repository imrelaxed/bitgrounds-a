<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewTicket extends Notification
{
    use Queueable;

    protected $ticket;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->ticket = $ticket;
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
            ->subject('Ticket ID: ' . $this->ticket->ticket_id . ' ' . $this->ticket->title)
            ->success()
            ->line( 'Thank you for contacting the Bitgrounds support team.
             A support ticket has been opened for you. You will be notified by email when a response is made. 
             The details of your ticket are as follows:')
            ->line( 'Title: '. $this->ticket->title)
            ->line('Priority: '. $this->ticket->priority)
            ->line('Status: '. $this->ticket->status)
            ->line('You can view your ticket and add additional comments by clicking the link below:')
            ->action('View Ticket', url('ticket/'. $this->ticket->ticket_id));

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
