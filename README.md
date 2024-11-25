# Laravel Geocode 

## Description

This is a Laravel wrapper for leveraging the functionalities of geocoding APIs. It simplifies the process of integrating
geocoding services into your Laravel applications.

## Features

* Easy integration with Laravel
* Supports multiple geocoding services
* Simplified API for geolocation tasks

## Installation

Use composer to install this package:

```bash
composer require daavelar/laravel-geocode
```

## Configuration

After the package has been installed, you will need to register it in the `providers` array in your `config/app.php`
file.

```php
'providers' => [
    // Other service providers...
    
    Daavelar\LaravelGeocode\LaravelGeoCodeServiceProvider::class,
],
```

You should also publish the config file with the following artisan command:

```bash
php artisan vendor:publish --provider="Daavelar\LaravelGeocode\LaravelGeoCodeServiceProvider"
```

This command will publish a `geocode.php` config file to your `config` directory. If you open this file, you will see
all the available settings you can adjust for this package.

Usage
To use the geocoding functionality, you can use the GeoCodeFacade provided by the package. Here is an example of how to use it:

```php
<?php
use Daavelar\LaravelGeoCode\GeoCodeFacade as GeoCode;

$address = '1600 Amphitheatre Parkway, Mountain View, CA';
$result = GeoCode::fromAddress($address);

print_r($result);
```

Make sure to set your OpenCage API key in the config/geocode.php file:

```php
<?php
return [
    'driver' => 'opencage',
    'opencage' => [
        'api_key' => env('OPENCAGE_API_KEY'),
    ],
];
```

You can set the OPENCAGE_API_KEY in your .env file:
```bash
OPENCAGE_API_KEY=your_api_key_here
```