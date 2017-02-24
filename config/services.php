<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => '1794966840827970',
        'client_secret' => 'f7bcf6a85db64ef77f156db0eee5487a',
        'redirect'      => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id'     => 'l8mjj8ZGn0eOviD0ARinewNOp',
        'client_secret' => 'SnDL7BlgTMhJa9WxTr3aAl1EQ7ldHmxNecd43Blco3zBT06klH',
        'redirect'      => 'http://localhost:8000/auth/twitter/callback',
    ],

];
