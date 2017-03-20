<?php

namespace App\Listeners;

use App\Events\UserUnsubscribedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        //
    }
}
