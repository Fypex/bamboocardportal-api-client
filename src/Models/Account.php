<?php

namespace Fypex\BamboocardClient\Models;

class Account
{

    private $id;
    private $currency;
    private $balance;
    private $isActive;

    public function __construct($account)
    {

        $this->id = $account['id'];
        $this->currency = $account['currency'];
        $this->balance = $account['balance'];
        $this->isActive = $account['isActive'];

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

}
