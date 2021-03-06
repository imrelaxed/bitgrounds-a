<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserUnsubscribed extends Notification
{
    use Queueable;

    protected $data;
    protected $subscription;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->data = $event;
        $this->subscription = $this->data->user->subscription('main');

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
            ->subject(config('app.name').' Subscription Cancelled')
            ->greeting('Hello '.ucfirst($this->data->user->name).'')
            ->error()
                    ->line('Your '. config('app.name') .' subscription has been cancelled.')
                    ->line('Service will remain active until '.$this->subscription->ends_at->toFormattedDateString() .'. At 
                    the end of this grace period your web hosting will be suspended.')
                    ->line('If you would like to resume your Bitgrounds Web Hosting membership you can login to your dashboard or click the button below.')
                    ->action('Resume Membership', route('subscriptionResume'))
                    ->line('Thank you for using '.config('app.name').'!');
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
