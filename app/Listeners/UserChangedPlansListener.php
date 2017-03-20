<?php

namespace App\Listeners;

use App\Events\UserChangedPlansEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserChangedPlansListener
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
     * @param  UserChangedPlansEvent  $event
     * @return void
     */
    public function handle(UserChangedPlansEvent $event)
    {
        //
    }
}
