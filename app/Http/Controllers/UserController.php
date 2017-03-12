<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request as Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function postUpgrade()
    {
        $user = Auth::user();
        $token = Input::get('stripeToken');
        $user->newSubscription('main', 'main')->create($token);

        return redirect()->back();
    }

}