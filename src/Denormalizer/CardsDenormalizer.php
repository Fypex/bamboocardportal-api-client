<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Card;
use Fypex\BamboocardClient\Models\Item;
use Fypex\BamboocardClient\Models\Rate;
use Fypex\BamboocardClient\Models\Rates;

class CardsDenormalizer
{

    /**
     * @param array $cards
     * @return Card[]
     */
    public static function denormalize(array $cards): array
    {

        $result = [];

        foreach ($cards as $card){
            $result[] = new Card($card);
        }

        return $result;

    }

}
