<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Rate;
use Fypex\BamboocardClient\Models\Rates;

class RatesDenormalizer
{

    /**
     * @param array $rates
     * @return array
     */
    public static function denormalize(array $rates): array
    {

        $result = [];

        foreach ($rates as $rate){
            $result[] = new Rate($rate);
        }

        return $result;

    }

}
