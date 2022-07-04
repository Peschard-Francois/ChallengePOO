<?php

class Speedometer
{
    public const MILES_CONVERSION = 1.609;
    public const KM_CONVERSION = 0.621;


    public static function convertKmToMiles(int $kmToMiles): float
    {
        return $kmToMiles * self::KM_CONVERSION;
    }

    public static function convertMilesToKm(int $milesToKm): float
    {
        return $milesToKm * self::MILES_CONVERSION;
    }
}