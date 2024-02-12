<?php
return [
    'origin' => env('RECAPTCHAV3_ORIGIN', 'https://www.google.com/recaptcha'),
    'sitekey' => env('RECAPTCHAV3_SITEKEY', ''),
    'secret' => env('RECAPTCHAV3_SECRET', ''),
    'locale' => env('RECAPTCHAV3_LOCALE', ''),
    'is_enabled' => env('RECAPTCHAV3_ENABLED', true),
];
