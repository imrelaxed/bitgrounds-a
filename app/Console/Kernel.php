<?php

namespace App\Console;

use App\GroundsKeeper;
use Carbon\Carbon;
use DB;
use App\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\ClearLogs',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();


        $schedule->call(function () {
            if ($end = DB::table('subscriptions')
                ->whereDate('ends_at','=<',Carbon::today()->toDateString())
                ->fistOrFail()) {
                if ($user = User::where('id', $end->user_id)->firstOrFail()) {
                    $gk = new GroundsKeeper();
                    $gk->suspendUser($user->username);
                }
            }
        })->dailyAt('01:00');
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
