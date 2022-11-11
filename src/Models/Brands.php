<?php

namespace Fypex\BamboocardClient\Models;

class Brands
{

    private $brands = [];
    private $brandKeys = [];

    public function setBrand(Brand $brand)
    {
        $this->brands[] = $brand;
        $this->brandKeys[$brand->getName()] = $brand;
    }

    /**
     * @return Brand[]
     */
    public function getBrands(): array
    {
        return $this->brands;
    }

    public function getByBrandName(string $name): Brand
    {
        return $this->brandKeys[$name];
    }

}
