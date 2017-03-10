<?php

namespace App\Http\Controllers;

use Auth;
use View;
use App\ApplicationSetting;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * The authenticated user.
     *
     * @var \App\User|null
     */
    protected $user;

    /**
     * Is the user signed in?
     *
     * @var \App\User|null
     */
    protected $signedIn;

    /**
     * Share Application Settings throughout the app.
     *
     * @var $app_settings
     */
  //  protected $app_settings;

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->user = $this->signedIn = Auth::user();
      //  $this->app_settings = ApplicationSetting::findOrFail(1);
       // View::share('app_settings', $this->app_settings);
    }

}
