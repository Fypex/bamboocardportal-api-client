<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Order;
use Fypex\BamboocardClient\Models\Rate;
use Fypex\BamboocardClient\Models\Rates;

class OrderDenormalizer
{

    /**
     * @param array $order
     * @return Order
     */
    public static function denormalize(array $order): Order
    {
        return new Order($order);
    }

}
