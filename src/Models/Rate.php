<?php


namespace Fypex\BamboocardClient\Models;


class Rate
{

    private $currencyCode;
    private $value;

    public function __construct($rate)
    {

        $this->currencyCode = $rate['currencyCode'];
        $this->value = $rate['value'];

    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }



}
