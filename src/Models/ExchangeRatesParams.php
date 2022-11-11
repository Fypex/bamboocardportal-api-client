<?php


namespace Fypex\BamboocardClient\Models;


class ExchangeRatesParams
{

    private $baseCurrency;
    private $currency;


    public static function init(string $baseCurrency, string $currency): ExchangeRatesParams
    {
        return new static($baseCurrency, $currency);
    }

    public function __construct(string $baseCurrency, string $currency)
    {
        $this->baseCurrency = $baseCurrency;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getBaseCurrency(): string
    {
        return $this->baseCurrency;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

}
