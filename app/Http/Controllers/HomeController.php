<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Plan;
use App\GroundsKeeper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        // Check if subscribed
        if($is_subscribed = Auth::user()->subscribed('main')) {

            // If subscribed get the subscription
            $subscription = Auth::user()->subscription('main');
            $subscriptionName = Plan::where('plan_id', $subscription->stripe_plan)->firstOrFail();
        }

        //Check if hosting is setup
        $is_setup = Auth::user()->hosting_set;

        if ($is_setup && !$is_subscribed){
            $gg = new GroundsKeeper();
            $params = ['user' => Auth::user()->username];
            $config = $gg->invokeGet('SHOW_USER_CONFIG', $params);
            $config = (object)$config;
            $suspended = $config->suspended;
            if ($suspended === 'no') {
                $gg->suspendUser(Auth::user()->username);
            }
        }

        if (!$is_subscribed){
            return view('user.subscribe', compact('plans'));
        }
        if($is_subscribed && !$is_setup) {
            return view('user.hosting', compact('is_subscribed', 'subscription'));
        }
        if ($is_subscribed && $is_setup) {
            $gk = new GroundsKeeper();
            $daUserContext = $gk->impersonateUser(Auth::user()->username);
            $daUserObject = $daUserContext->getContextUser();
            $params = ['user' => Auth::user()->username];
            $config = $gk->invokeGet('SHOW_USER_CONFIG', $params);
            $config = (object)$config;
            $suspended = $config->suspended;
            if ($suspended === 'yes') {
                $gk->unsuspendUser(Auth::user()->username);
            }

            $title = 'Dashboard';
            return view('user.panel', compact('title', 'daUserObject', 'is_subscribed', 'subscription', 'subscriptionName', 'suspended'));
        }
    }
}
