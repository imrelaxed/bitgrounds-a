<?php

namespace App\Listeners;

use App\Events\UserSubscribedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserSubscribed;

class UserSubscribedListener
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
     * @param  UserSubscribedEvent  $event
     * @return void
     */
    public function handle(UserSubscribedEvent $event)
    {
        Notification::send($event->user, new UserSubscribed($event));
    }
}
