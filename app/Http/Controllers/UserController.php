<?php namespace App\Http\Controllers;

use App\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $plans = Plan::getStripePlans();
        $user = Auth::user();
        // Check is subscribed
        $is_subscribed = Auth::user()->subscribed('main');

        // If subscribed get the subscription
        $subscription = Auth::user()->subscription('main');

        $title = 'Dashboard';
        return view('settings', compact('plans', 'user', 'is_subscribed', 'subscription'));
    }

}