<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Stripe\Stripe;

class Plan extends Model
{
    protected $guarded = ['id'];

    public static function getStripePlans()
    {
        // Set the API Key
        Stripe::setApiKey(User::getStripeKey());

        try {
            // Fetch all the Plans and cache it
            return Cache::remember('stripe.plans', 60*24, function() {
                return \Stripe\Plan::all()->data;
            });
        } catch ( \Exception $e ) {
            return false;
        }
    }
}