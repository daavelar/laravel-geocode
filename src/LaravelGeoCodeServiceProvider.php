<?php

namespace Daavelar\LaravelGeoCode;

use Carbon\Laravel\ServiceProvider;

class LaravelGeoCodeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('geocode', function () {
            if (config('geocode.driver') == 'opencage') {
                return new OpenCageGeoCode();
            }
        });

        $this->publishes([
            __DIR__ . '/config.php' => config_path('geocode.php')
        ]);
    }
}