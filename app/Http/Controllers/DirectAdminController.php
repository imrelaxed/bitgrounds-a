<?php

namespace App\Http\Controllers;

use Omines\DirectAdmin\DirectAdmin;
use Omines\DirectAdmin\DirectAdminException;
use App\GroundsKeeper;
use Illuminate\Http\Request;

class DirectAdminController extends Controller
{
    public function makeUser () {
        $login='test123';
        $password='Password1234';
        $email='sedatedvlad@gmail.com';
        $domain='testcase123.com';
        $package='Standard';

        if ($groundskeeper = new GroundsKeeper()) {
            try {
                $createdUser = $groundskeeper->createUser($login, $password, $email, $domain, $package);
            } catch (\Exception $error) {
                return view('test', compact('error'));
            }
        $createdName = $createdUser->getUsername();
        $createdType = $createdUser->getType();
        $createdDomain = $createdUser->getDefaultDomain()->getDomainName();

        return view('test', compact('createdName','createdType', 'createdDomain'));
        }

        $error='Can\'t find the grounds keeper...';
        return view('test', compact('error'));

    }

    public function connectionTest() {

        $url = env('DIRECTADMIN_URL');
        $login = env('DIRECTADMIN_LOGIN');
        $pw = env('DIRECTADMIN_PASS');

        try {
        $resellerContext = DirectAdmin::connectReseller($url, $login, $pw, true);
        } catch (\Exception $error ) {
            $createdName = '';
            $createdType = '';
            $createdDomain = '';

            return view('test', compact('createdName','createdType', 'createdDomain', 'error'));
        }

        $createdName = $resellerContext->getIPs();
        $createdName = $createdName[0];
        $createdType = '';
        $createdDomain = '';

        return view('test', compact('createdName','createdType', 'createdDomain', 'error'));
    }
}
