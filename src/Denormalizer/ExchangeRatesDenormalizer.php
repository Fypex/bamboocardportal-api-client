<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Rates;

class ExchangeRatesDenormalizer
{

    /**
     * @param array $rates
     * @return Rates
     */
    public static function denormalize(array $rates): Rates
    {
        return new Rates($rates);
    }

}
