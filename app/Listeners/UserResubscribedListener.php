<?php

namespace App\Listeners;

use App\Events\UserResubscribedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserResubscribedListener
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
     * @param  UserResubscribedEvent  $event
     * @return void
     */
    public function handle(UserResubscribedEvent $event)
    {
        //
    }
}
