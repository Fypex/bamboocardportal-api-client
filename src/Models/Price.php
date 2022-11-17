<?php


namespace Fypex\BamboocardClient\Models;


class Price
{

    private $min;
    private $max;
    private $currencyCode;

    public function __construct(array $price)
    {

        $this->min = $price['min'];
        $this->max = $price['max'];
        $this->currencyCode = $price['currencyCode'];

    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * @return float
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

}
