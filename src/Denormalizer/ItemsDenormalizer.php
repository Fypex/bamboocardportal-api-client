<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Item;
use Fypex\BamboocardClient\Models\Rate;
use Fypex\BamboocardClient\Models\Rates;

class ItemsDenormalizer
{

    /**
     * @param array $items
     * @return Item[]
     */
    public static function denormalize(array $items): array
    {

        $result = [];

        foreach ($items as $item){
            $result[] = new Item($item);
        }

        return $result;

    }

}
