<?php


namespace Fypex\BamboocardClient\Models;


use Fypex\BamboocardClient\Denormalizer\RatesDenormalizer;

class Rates
{

    private $baseCurrencyCode;
    private $rates;

    public function __construct(array $rates)
    {

        $this->baseCurrencyCode = $rates['baseCurrencyCode'];
        $this->rates = RatesDenormalizer::denormalize($rates['rates']);

    }

    /**
     * @return mixed
     */
    public function getBaseCurrencyCode(): string
    {
        return $this->baseCurrencyCode;
    }

    /**
     * @return Rate[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }



}
