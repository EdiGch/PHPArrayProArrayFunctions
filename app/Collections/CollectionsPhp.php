<?php

declare(strict_types=1);

namespace App\Collections;

use Doctrine\Common\Collections\ArrayCollection;
use App\data\DataForArrayPro;

class CollectionsPhp
{
    public function run()
    {
        dump("filter");
        dump($this->filterCities());
        dump("add");
        dump($this->addToCollection());
        dump("remove");
        dump($this->removeFromCollection());
        dump("indexOf");
        dump($this->indexOf());
        dump("indexOf");
        dump($this->indexOfTest01());
        dump("first");
        dump($this->firstElementFromCollection());
        dump("last");
        dump($this->lastElementFromCollection());
        dump("partition");
        dump($this->partitionElementFromCollection());
        dump("toArray");
        dump($this->toArray());
        dump("getValues");
        dump($this->getValuesElementFromCollection());
    }

    /**
     * @return ArrayCollection
     * Szuka elementu w tablicy
     */
    public function filterCities()
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->filter(
            function ($myCity) {
                return $myCity['population'] > 785000;
            }
        );
    }

    public function addToCollection()
    {
        $allCity = $this->setCityToArrayCollection();
        $newCity = DataForArrayPro::dataArrayTheLocationCityWarsaw();
        $allCity->add($newCity);
        return $allCity;
    }

    public function removeFromCollection()
    {
        $allCity = $this->setCityToArrayCollection();
        $allCity->remove(0);
        return $allCity;
    }

    /**
     * @return bool|int|string
     * Zwraca numer index. Zwraca numer pozycji w tablicy
     */
    public function indexOf()
    {
        $allCity = $this->setCityToArrayCollection();
        $indexOf = $allCity->indexOf(
            [
                "name" => "Frankfurt",
                "country" => "Germany",
                "population" => 585000,
                "latitude" => 50.110924,
                "longitude" => 8.682127,
            ]
        );
        return $indexOf;
    }

    /**
     * @return bool|int|string
     * Zwraca numer index. Zwraca numer pozycji w tablicy
     */
    public function indexOfTest01()
    {
        $allCity = $this->setCityToArrayCollection();
        $indexOf = $allCity->indexOf(DataForArrayPro::dataArrayTheLocationCityMumbai());
        return $indexOf;
    }

    /**
     * @return mixed
     * Zwraca pierwszy element listy
     */
    public function firstElementFromCollection()
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->first();
    }

    /**
     * @return mixed
     * Zwraca ostatni element listy
     */
    public function lastElementFromCollection()
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->last();
    }

    /**
     * @return bool
     * Zwraca bool jeśli zostanie spełniony warunek.
     */
    public function existsElementFromCollection(): bool
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->exists(function($key, $value) {
           return $value['population'] > 780000;
        });
    }

    /**
     * @return array|\Doctrine\Common\Collections\Collection[]
     * Dzieli Tablice na dwie. W pierwszej tablicy znajdują się elementy spełniające warunek,
     * druga zawiera elementy niespełniające warunku
     */
    public function partitionElementFromCollection()
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->partition(function ($key, $city){
            return $city['population'] > 780000;
        });
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $allCity = $this->setCityToArrayCollection();
        return $allCity->toArray();
    }

    /**
     * @return array
     */
    public function getValuesElementFromCollection(): array
    {
        $data = DataForArrayPro::dataArrayTheLocationCityWarsaw();
        $allCity = new ArrayCollection($data);
        return $allCity->getValues();
    }

    /**
     * @return ArrayCollection
     */
    public function setCityToArrayCollection(): ArrayCollection
    {
        $city = DataForArrayPro::dataArrayCollectionsAllCity();
        return new ArrayCollection($city);
    }


}