<?php namespace App\Http\Controllers;

use App\Plan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function getBilling()
    {

        $lastfour = auth()->user()->card_last_four;

        $settings = $this->app_settings;
        $plans = Plan::getStripePlans();
        // Check is subscribed
        $is_subscribed = Auth::user()->subscribed('main');

        // If subscribed get the subscription
        $subscription = Auth::user()->subscription('main');

        $title = 'Dashboard';
        return view('settings', compact('plans', 'settings', 'is_subscribed', 'subscription', 'lastfour'));
    }

    public function getSettings()
    {
        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    public function postUpdateSettings()
    {
        $user = Auth::user();

        $user->email = Input::get('email');
        $user->name = Input::get('name');

        if($user->save())
        {
            return back()->with('notice', 'Settings updated successfully.');
        }
        else
        {
            return back()->with('notice', 'Unable to update settings.');
        }


    }

}