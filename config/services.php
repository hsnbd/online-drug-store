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

    'github' => [
        'client_id' => '4452d8b34070ff517120',         // Your GitHub Client ID
        'client_secret' => '47ff27659dc1633d198b30d13c33f8c07bde6c59', // Your GitHub Client Secret
        'redirect' => 'http://drugstore.cf/socialauth/github/callback',
    ],

    'facebook' => [
        'client_id' => '203706493518184',         // Your GitHub Client ID
        'client_secret' => '76b847863f42910187bf98f6cfb83668', // Your GitHub Client Secret
        'redirect' => 'http://drugstore.cf/socialauth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'vYRSxxyttQclfLb3msfB8Jc9d',         // Your GitHub Client ID
        'client_secret' => 'xxEln0LkSDDgbGUy0i9tA7lcI0SLS59PRqyaHNA2CNLaafgptC', // Your GitHub Client Secret
        'redirect' => 'http://drugstore.cf/socialauth/twitter/callback',
    ],
    'google' => [
        'client_id' => '58849336955-0l4ake46bmqgnmg7hvkqd0qk03ohf058.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'KDWPFBDH0Lx4Fx16kj4YyjjN', // Your GitHub Client Secret
        'redirect' => 'http://drugstore.cf/socialauth/google/callback',
    ],
];
