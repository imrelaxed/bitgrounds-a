<?php

namespace App;

use Omines\DirectAdmin\DirectAdmin;
use Omines\DirectAdmin\DirectAdminException;

class GroundsKeeper {

protected $resellerContext;
public $createdUser;

    public function __construct()
    {
        $url = env('DIRECTADMIN_URL');
        $login = env('DIRECTADMIN_LOGIN');
        $pw = env('DIRECTADMIN_PASS');

        $resellerContext = DirectAdmin::connectReseller($url, $login, $pw, true);
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
}