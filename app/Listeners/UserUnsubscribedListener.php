<?php

namespace App\Listeners;

use App\Events\UserUnsubscribedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserUnsubscribed;

class UserUnsubscribedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserUnsubscribedEvent  $event
     * @return void
     */
    public function handle(UserUnsubscribedEvent $event)
    {
        Notification::send($event->user, new UserUnsubscribed($event));

    }
}
