<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1247859569491348',
        'client_secret' => '18706daf7a527c803cf0e5cddd27c512',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '401577826705-rr5asv81cj0cdelq5835teiukjgqg7hk.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    'github' => [
        'client_id' => '429cd553b3e93c8e1eb8',
        'client_secret' => '8e23e0e671e43c3724833da8c49dbef9df83582f',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],





];
