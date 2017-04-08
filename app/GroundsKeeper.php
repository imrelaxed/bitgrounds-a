<?php

namespace App;

use Omines\DirectAdmin\DirectAdmin;

class GroundsKeeper {

protected $resellerContext;

    public function __construct()
    {

        $resellerContext = DirectAdmin::connectReseller(DIRECTADMIN_URL, RESELLER_USERNAME, RESELLER_PASSWORD, true);
    }
}