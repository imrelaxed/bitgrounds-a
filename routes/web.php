<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Static Pages
Route::get('/',              'StaticPageController@index');
Route::get('about',          'StaticPageController@about');
Route::get('pricing',        'StaticPageController@pricing');
Route::get('contact',        'StaticPageController@contact');
Route::get('terms-of-use',   'StaticPageController@termsOfUse');
Route::get('privacy-policy', 'StaticPageController@privacyPolicy');
Route::get('components',     'StaticPageController@components');

/* Helper class that generates the routes required for user authentication

    // Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');
    // Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register', 'Auth\RegisterController@register');
    // Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
*/
Auth::routes();

// User and Admin controllers
Route::get('admin', 'HomeController@index');
Route::get('home/your', 'HomeController@index');

// Other
Route::get('home', 'HomeController@index');
