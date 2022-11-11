<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Brand;
use Fypex\BamboocardClient\Models\Product;

class ProductsDenormalizer
{

    /**
     * @param array $products
     * @return array<Product>
     */
    public static function denormalize(array $products): array
    {

        $results = [];
        foreach ($products as $product){
            $results[] = new Product($product);
        }

        return $results;
    }

}
