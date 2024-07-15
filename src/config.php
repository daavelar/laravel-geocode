<?php

return [
    'driver' => env('GEOCODE_DRIVER', 'opencage'),

    'opencage' => [
        'api_key' => env('GEOCODE_API_KEY'),
    ]
];