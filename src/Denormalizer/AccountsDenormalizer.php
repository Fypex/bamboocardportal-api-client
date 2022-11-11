<?php


namespace Fypex\BamboocardClient\Denormalizer;


use Fypex\BamboocardClient\Models\Account;
use Fypex\BamboocardClient\Models\Accounts;

class AccountsDenormalizer
{

    /**
     * @param array $accounts
     * @return Accounts
     */
    public static function denormalize(array $accounts): Accounts
    {
        return new Accounts($accounts);
    }

}
