<?php

namespace App\Listeners;

use App\Events\SubscriptionDeletedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AccountSuspended;
use App\GroundsKeeper;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NotifyAdmin;

class SubscriptionDeletedListener
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
     * @param  SubscriptionDeletedEvent  $event
     * @return void
     */
    public function handle(SubscriptionDeletedEvent $event)
    {
        Notification::send($event->user, new AccountSuspended($event));
        $gk = new GroundsKeeper();
        $params = ['user' => $event->user->username];
        $config = $gk->invokeGet('SHOW_USER_CONFIG', $params);
        $config = (object)$config;
        $suspended = $config->suspended;
        if ($suspended === 'no') {
            $gk->suspendUser($event->user->username);
        }

        try {

            $user = $event->user;
            $user->subscription_active = 0;
            $user->save();

        } catch (\Exception $e) {
            $admins = User::where('admin', '=', 1)->get();
            Notification::send($admins, new NotifyAdmin($e));
        }
    }
}
