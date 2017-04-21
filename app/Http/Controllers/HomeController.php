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
        $gk = new GroundsKeeper();
        $da = $gk->impersonate(Auth::user()->username);
        $da = $da->getContextUser();
        // Check if subscribed
        $is_subscribed = Auth::user()->subscribed('main');

        // If subscribed get the subscription
        $subscription = Auth::user()->subscription('main');

        //Check if hosting is setup
        $is_setup = Auth::user()->hosting_set;

        if($is_subscribed && !$is_setup){
            $title = 'Set Up Your Web Hosting Panel';
            return view('user.hosting', compact('title', 'da', 'is_subscribed', 'subscription'));
        } else {
            $title = 'Dashboard';
            return view('user.panel', compact('title', 'da', 'is_subscribed', 'subscription'));
        }
    }
}
