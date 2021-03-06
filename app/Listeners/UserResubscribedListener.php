<?php

namespace App\Listeners;

use App\Events\UserResubscribedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserResubscribed;
use App\Notifications\NotifyAdmin;
use App\GroundsKeeper;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        Notification::send($event->user, new UserResubscribed($event));
        $gk = new GroundsKeeper();
        $params = ['user' => $event->user->username];
        $config = $gk->invokeGet('SHOW_USER_CONFIG', $params);
        $config = (object)$config;
        $suspended = $config->suspended;
        if ($suspended === 'yes') {
            $gk->unsuspendUser($event->user->username);
        }
        try {

            $user = $event->user;
            $user->subscription_active = 1;
            $user->save();

        } catch (\Exception $e) {
            $admins = User::where('admin', '=', 1)->get();
            Notification::send($admins, new NotifyAdmin($e));
        }

    }
}
