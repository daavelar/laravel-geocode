<?php

namespace Daavelar\LaravelGeoCode;

use OpenCage\Geocoder\Geocoder;

class OpenCageGeoCode
{
    public function fromAddress(string $address)
    {
        $geocoder = new Geocoder(config('geocode.opencage.api_key'));
        $result = $geocoder->geocode($address);

        return $result;
    }
}