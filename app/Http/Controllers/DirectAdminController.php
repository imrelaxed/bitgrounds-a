<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Omines\DirectAdmin\DirectAdmin;
use Omines\DirectAdmin\DirectAdminException;
use GuzzleHttp;
use App\GroundsKeeper;
use Illuminate\Http\Request;

class DirectAdminController extends Controller
{
    public function makeUser (Request $request) {
        $messages = [
            'regex' => 'The :attribute must be at least 6 characaters long, contain a number, an upper case letter and a lower case letter.',
        ];
        $this->validate( $request, [
            'username' => 'required|alpha_num|max:10',
            'domain' => 'required|max:128',
            'password' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/|confirmed',
        ], $messages);

        $domain = strtolower($request->get('domain'));
        $login =  strtolower($request->get('username'));
        $password =  $request['password'];
        $email = Auth::user()->email;
        $package=Auth::user()->subscription('main');

        if ($groundskeeper = new GroundsKeeper()) {
            try {
                $createdUser = $groundskeeper->createUser($login, $password, $email, $domain, $package);
            } catch (\Exception $error) {
                $createdName = '';
                $createdType = '';
                $createdDomain = '';
                return view('test', compact('createdName','createdType', 'createdDomain', 'error'));
            }
            $user = Auth::user();
            $user->hosting_set = 1;
            $user->save();
        $createdName = $createdUser->getUsername();
        $createdType = $createdUser->getType();
        $createdDomain = $createdUser->getDefaultDomain()->getDomainName();
        $error = 'none';

        return view('test', compact('createdName','createdType', 'createdDomain', 'error'));
        }
        $createdName = '';
        $createdType = '';
        $createdDomain = '';
        $error='Can\'t find the grounds keeper...';
        return view('test', compact('createdName','createdType', 'createdDomain', 'error'));

    }

}
