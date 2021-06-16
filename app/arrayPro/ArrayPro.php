<?php

declare(strict_types=1);

namespace App\arrayPro;

use App\data\DataCityModel;
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
        dump($this->myArrayColumnObject());
        dump("array_push");
        dump($this->myArrayPush());
        dump("array_diff");
        $this->myArrayDiff();
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

    public function myArrayColumnObject(): array
    {
        $array = $this->arrayTheCitiesObject();
        return array_column($array, 'country');
    }

    public function myArrayPush(): array
    {
        $array = $this->dataArrayTheLocationCity();
        array_push($array, 14,15,16);
        return $array;
    }

    /**
     * Porównanie tablic, zwrot indeksu z elementu nie będącego w jednej z tablic
     */
    public function myArrayDiff(): void
    {
        $arrayOne = [1,2,3,4,5,6];
        $arrayTwo = [1,2,3,4,5,6,7];

        $warsaw = new DataCityModel('Warsaw', 'Poland', 2500000,'4.110924', '18.682127');
        $bialystok = new DataCityModel('Białystok', 'Poland', 250000,'14.110924', '15.682127');

        $differenceArray = array_diff($arrayTwo, $arrayOne);
        dump($differenceArray);
        $differenceArrayTwo = array_diff($bialystok->returnArrayKeyAndValue(), $warsaw->returnArrayKeyAndValue());
        dump($differenceArrayTwo);
    }

    private function multidimensionalArrayTheLocationCity(): array
    {
        return [
            $this->dataForArrayPro::dataArrayTheLocationCityFrankfurt(),
            $this->dataForArrayPro::dataArrayTheLocationCityMumbai(),
        ];
    }

    private function arrayTheCitiesObject(): array
    {

        return [
            new DataCityModel('Warsaw', 'Poland', 2500000,'4.110924', '18.682127'),
            new DataCityModel('Białystok', 'Poland', 250000,'14.110924', '15.682127'),
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