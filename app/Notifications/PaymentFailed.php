<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PaymentFailed extends Notification
{
    use Queueable;

    protected $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->data = $user;
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
            ->subject(config('app.name') . ' Subscription Payment Failed')
            ->greeting('Hello'. ucfirst($this->data->name))
            ->error()
                    ->line('Your subscription payment to '.config('app.name').' Web Hosting has failed. This is likely because you need to update the credit card attached to your account. 
                    Please update it as soon as possible by logging into your Bitgrounds account and going to Billing Settings or by using the button below.')
                    ->action('Update Credit Card', route('billing'))
                    ->line('We will attempt to charge your card again soon. If the charge fails 3 times in a row your web hosting will be suspended!');
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
