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
        'client_id'     => '355480908427982',
        'client_secret' => '0e21c146d2a525d9e6acaf30558c23e6',
        'redirect'      => 'http://pubgkatta.in.cp-ht-9.bigrockservers.com/artclans/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '529642959764-js7of4c3jpmfdu8gnakku6p4eprse82r.apps.googleusercontent.com',
        'client_secret' => '9lIGWomqrcb8iv2AYGaVkkor',
        'redirect' => 'http://localhost:8080/p101/auth/google/callback',
    ]

];
