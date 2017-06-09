<?php namespace App\Http\Controllers;

use App\Plan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;

class StaticPageController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Static Page Controller
    |--------------------------------------------------------------------------
    |
    | Most applications have a set of static pages such as about, contact
    | and so on. This controller handles the presentation of these in
    | a way that also allows for SEO using title and descriptions.
    |
    */

    public function index()
    {
        $title = 'Bitgrounds Web Hosting';
        return view('welcome', compact('title'));
    }
    public function nameServers() {
        return view('support.dns');
    }
    public function directAdmin() {
        return view('support.directadmin');
    }
    public function ftp() {
        return view('support.ftp');
    }
    public function email() {
        return view('support.email');
    }

    public function pricing()
    {
        $title = 'Pricing';
        $plans = Plan::all();

        return view('pages.pricing', compact('title', 'plans'));
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }
    public function support()
    {
        $title = 'Support';
        return view('pages.support', compact('title'));
    }
    public function termsOfUse()
    {
        $title = 'Terms of use';
        return view('pages.terms-of-use', compact('title'));
    }
    public function privacyPolicy()
    {
        $title = 'Privacy Policy';
        return view('pages.privacy-policy', compact('title'));
    }

}
