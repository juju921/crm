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
        'client_id'     => env('275911285779388'),
        'client_secret' => env('635d9bf7f62993caae9409035de96698'),
        'redirect'      => env('http://localhost:8000/auth/facebook/callback'),
    ],

    'twitter' => [
        'client_id'     => env('l8mjj8ZGn0eOviD0ARinewNOp'),
        'client_secret' => env('SnDL7BlgTMhJa9WxTr3aAl1EQ7ldHmxNecd43Blco3zBT06klH'),
        'redirect'      => env('http://localhost:8000/auth/twitter/callback'),
    ],

];
