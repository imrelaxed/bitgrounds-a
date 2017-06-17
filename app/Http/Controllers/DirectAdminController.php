<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Omines\DirectAdmin\DirectAdmin;
use Omines\DirectAdmin\DirectAdminException;
use GuzzleHttp;
use App\GroundsKeeper;
use Illuminate\Http\Request;
use App\Plan;

class DirectAdminController extends Controller
{
    public function makeUser (Request $request)
    {
        $messages = [
            'regex' => 'The :attribute must be at least 6 characaters long, contain a number, an upper case letter and a lower case letter.',
            'unique' => 'Username already taken, please try another.',
        ];
        $this->validate($request, [
            'username' => 'required|alpha_num|max:10|unique:gatekeeper.user,User',
            'domain' => 'required|max:128',
            'password' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/|confirmed',
        ], $messages);

        $domain = strtolower($request->get('domain'));
        $login = strtolower($request->get('username'));
        $password = $request['password'];
        $email = Auth::user()->email;
        $package = Auth::user()->subscription('main')->stripe_plan;

        if ($groundskeeper = new GroundsKeeper()) {
            try {
                $createdUser = $groundskeeper->createUser($login, $password, $email, $domain, $package);
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['notice' => $e->getMessage()]);
            }
            $user = Auth::user();
            $user->hosting_set = 1;
            $user->username = $login;
            $user->save();
            $daUserObject = $createdUser;
            $subscription = Auth::user()->subscription('main');
            $subscriptionName = Plan::where('plan_id', $subscription->stripe_plan)->firstOrFail();
            $is_subscribed = Auth::user()->subscribed('main');
            $params = ['user' => Auth::user()->username];
            $config = $groundskeeper->invokeGet('SHOW_USER_CONFIG', $params);
            $config = (object)$config;
            $suspended = $config->suspended;


            return view('user.panel', compact('daUserObject','subscription', 'is_subscribed','subscriptionName','suspended'));
        } else {
            return redirect()->back()->with('notice', 'Error, please try again.');
        }
    }

}
