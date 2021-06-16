<?php
declare(strict_types=1);


namespace App\data;


class DataCityModel
{
    public string $name;
    public string $country;
    public int $population;
    public string $latitude;
    public string $longitude;

    public function __construct(string $name, string $country, int $population, string $latitude, string $longitude)
    {
        $this->name = $name;
        $this->country = $country;
        $this->population = $population;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function returnArrayKeyAndValue(): array
    {
        return [
            'name' => $this->name,
            'country' => $this->country,
            'population' => $this->population,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}