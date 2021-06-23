<?php

declare(strict_types=1);

namespace App\data;

class DataForArrayPro
{
    public static function dataArrayTheLocationCityFrankfurt(): array
    {
        return [
            'name' => 'Frankfurt',
            'country' => 'Germany',
            'population' => 585000,
            'latitude' => 50.110924,
            'longitude' => 8.682127,
        ];
    }

    public static function dataArrayTheLocationCityMumbai(): array
    {
        return [
            'name' => 'Mumbai',
            'country' => 'India',
            'population' => 785000,
            'latitude' => 19.110924,
            'longitude' => 72.682127,
        ];
    }


    public static function dataArrayTheLocationCityValencia(): array
    {
        return [
            'name' => 'Valencia',
            'country' => 'France',
            'population' => 985000,
            'latitude' => 19.110924,
            'longitude' => 72.682127,
        ];
    }

    public static function dataArrayTheLocationCityWarsaw(): array
    {
        return [
            'name' => 'Warsaw',
            'country' => 'Poland',
            'population' => 1985000,
            'latitude' => 28.110924,
            'longitude' => 86.682127,
        ];
    }

    public static function dataArrayCollectionsAllCity():array
    {
        return [
            self::dataArrayTheLocationCityFrankfurt(),
            self::dataArrayTheLocationCityMumbai(),
            self::dataArrayTheLocationCityValencia(),
        ];
    }

    public static function dataArrayTheNumbers(): array
    {
        return [10, 10, 20, 20, 30, 40, 50, 50, 50];
    }
}