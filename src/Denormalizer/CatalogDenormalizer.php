<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Brand;
use Fypex\BamboocardClient\Models\Brands;

class CatalogDenormalizer
{

    /**
     * @param array $brands
     * @return Brands
     */
    public static function denormalize(array $brands): Brands
    {

        $Brands = new Brands();
        foreach ($brands as $brand){
            $Brands->setBrand(new Brand($brand));
        }

        return $Brands;

    }

}
