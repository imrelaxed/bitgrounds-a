<?php

namespace App;

use Omines\DirectAdmin\DirectAdmin;
use Omines\DirectAdmin\DirectAdminException;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyAdmin;
use App\User;

class GroundsKeeper {

protected $resellerContext;
public $createdUser;

    public function __construct()
    {
        $url = env('DIRECTADMIN_URL');
        $login = env('DIRECTADMIN_LOGIN');
        $pw = env('DIRECTADMIN_PASS');

        $this->resellerContext = DirectAdmin::connectReseller($url, $login, $pw, true);
    }

    public function createUser($login, $password, $email, $domain, $package) {

        $ips = $this->resellerContext->getIPs();
        if( !empty($ips[0]) ) {

            $user = $this->resellerContext->createUser($login, $password,
                $email, $domain, $ips[0], $package);
            $this->createdUser = $user;
            return $user;
        }
    }

    public function impersonate($username) {
        $user = $this->resellerContext->impersonateUser($username);
    return $user;
    }

    public function changePackage($user, $package) {
        $command ='MODIFY_USER';
        $params = [
            'action' => 'package',
            'user' => $user,
            'package' => $package
        ];

        try {
            $this->resellerContext->invokePost($command, $params);

        } catch ( DirectAdminException $e ) {
            return redirect()->back()->withErrors(['notice' => $e->getMessage()]);
        }

    }
    public function suspendUser($user) {
        try {
        $this->resellerContext->suspendAccount($user);
            } catch ( DirectAdminException $e ) {
            $admins = User::where('admin', '=', 1)->get();
            Notification::send($admins, new NotifyAdmin($e));
        }
    }
     public function unsuspendUser($user) {
        try {
        $this->resellerContext->unsuspendAccount($user);
          } catch ( DirectAdminException $e ) {
            $admins = User::where('admin', '=', 1)->get();
            Notification::send($admins, new NotifyAdmin($e));
    }
    }
     public function impersonateUser($user) {
        $user = $this->resellerContext->impersonateUser($user, true);
        return $user;
    }

    public function invokePost($command, $params) {
        $api = $this->resellerContext->invokePost($command, $params);
        return $api;
    }

    public function invokeGet($command, $params) {
        $api = $this->resellerContext->invokeGet($command, $params);
        return $api;
    }

}