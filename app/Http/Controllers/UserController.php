<?php namespace App\Http\Controllers;

use App\Plan;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


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

    public function postUpdateSettings(Request $request)
    {
        $user = Auth::user();

        $this->validate( $request, [
            'name' => [
                'required',
                'max:128',
            ],
            'email' => [
                'required',
                'max:128',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        $user->email = $request->get('email');
        $user->name =  $request->get('name');

        if($user->save())
        {
            return back()->with('notice', 'Settings updated successfully.');
        }
        else
        {
            return back()->with('notice', 'Unable to update settings.');
        }
    }

    public function getChangePassword()
    {
    //
    }

    public function postChangePassword(Request $request)
    {
        $user = Auth::user();
        $this->validate( $request, [
            'newpassword' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/|confirmed',
        ]);
    }



}