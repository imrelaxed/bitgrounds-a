<?php namespace App\Http\Controllers;

use App\ApplicationSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | Every modern web application has some sort of administrative dashboard
    | that enables the people behind the application to modify content and
    | get a general overview. Is also nice for non-technical founders.
    |
    */

    // load first column of app settings table and pass it to the admin view.
    public function getIndex()
    {
        $title = 'Admin Dashboard';
        $settings = 'kappa123'; //ApplicationSetting::findOrFail(1);
        return view('admin.index', compact('title', 'settings'));

    }
    // get app table setting data into a var. grab all requests except csrf token. arrange it in to an array ready for DB insertion and insert it. all using eloquent models.
    public function postUpdateSettings()
    {
        $setting = ApplicationSetting::findOrFail(1);

        $input = Request::except('_token');
        foreach($input as $key => $value) {
            $setting[$key] = $value;
        }
        $setting->save();
        return redirect()->back();
    }

}