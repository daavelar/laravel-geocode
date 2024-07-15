<?php

namespace Daavelar\LaravelGeoCode;

use Illuminate\Support\Facades\Facade;

class GeoCodeFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'geocode';
    }
}