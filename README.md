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
composer require yourvendorname/geocode-package
```

## Configuration

After the package has been installed, you will need to register it in the `providers` array in your `config/app.php`
file.

```php
'providers' => [
    // Other service providers...
    
    YourVendorName\Geocode\GeocodeServiceProvider::class,
],
```

You should also publish the config file with the following artisan command:

```bash
php artisan vendor:publish --provider="YourVendorName\Geocode\GeocodeServiceProvider"
```

This command will publish a `geocode.php` config file to your `config` directory. If you open this file, you will see
all the available settings you can adjust for this package.