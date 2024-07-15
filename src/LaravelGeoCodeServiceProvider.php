<?php

namespace Daavelar\LaravelGeoCode;

use Carbon\Laravel\ServiceProvider;

class LaravelGeoCodeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('geocode', function ($app) {
            if (config('geocode.driver') == 'opencage') {
                return new OpenCageGeoCode();
            }
        });
    }
}