<?php

declare(strict_types=1);

namespace App\arrayPro;

use App\data\DataForArrayPro;

class ArrayPro
{
    /**
     * @var DataForArrayPro
     */
    private DataForArrayPro $dataForArrayPro;

    public function __construct()
    {
        $this->dataForArrayPro = new DataForArrayPro();
    }

    public function run()
    {
        dump("array_keys");
        dump($this->myArrayKeys());
        dump("array_values");
        dump($this->myArrayValues());
        dump("in_array");
        dump($this->myInArray());
        dump("array_key_exists");
        dump($this->myArrayKeyExists());
        dump("array_search");
        dump($this->myArraySearch());
        dump("array_count_values");
        dump($this->myArrayCountValues());
        dump("array_unique");
        dump($this->myArrayUnique());
        dump("array_column");
        dump($this->myArrayColumn());
    }

    public function myArrayKeys(): array
    {
        return array_keys($this->dataArrayTheLocationCity());
    }

    public function myArrayValues(): array
    {
        return array_values($this->dataArrayTheLocationCity());
    }

    public function myInArray(): bool
    {
        return in_array('Germany', $this->dataArrayTheLocationCity());
    }

    public function myArrayKeyExists(): bool
    {
        return array_key_exists('name', $this->dataArrayTheLocationCity());
    }

    /**
     * Zwaraca klucz tablicy jeśli znajdzie szukany element
     * @return false|int|string
     */
    public function myArraySearch()
    {
        return array_search('Frankfurt', $this->dataArrayTheLocationCity());
    }

    /**
     * Zwraca liczbę wystąpień danej cyfy, grupuje i zlicza elementy tablicy
     * @return array
     */
    public function myArrayCountValues(): array
    {
        return array_count_values($this->dataArrayTheNumbers());
    }

    public function myArrayUnique(): array
    {
        return array_unique($this->dataArrayTheNumbers());
    }

    public function myArrayColumn(): array
    {
        return array_column($this->multidimensionalArrayTheLocationCity(), 'country');
    }

    private function multidimensionalArrayTheLocationCity(): array
    {
        return [
            $this->dataForArrayPro::dataArrayTheLocationCityFrankfurt(),
            $this->dataForArrayPro::dataArrayTheLocationCityMumbai(),
        ];
    }

    private function dataArrayTheLocationCity(): array
    {
        return $this->dataForArrayPro::dataArrayTheLocationCityFrankfurt();
    }

    private function dataArrayTheNumbers(): array
    {
        return $this->dataForArrayPro::dataArrayTheNumbers();
    }

}