<?php


namespace Fypex\BamboocardClient\Models;


class Accounts
{

    private $accounts = [];
    private $positions;

    public function __construct($accounts)
    {

        foreach ($accounts as $key => $account){
            $account = new Account($account);

            $this->accounts[$key] = $account;
            $this->positions[$account->getId()] = $key;
        }

    }

    /**
     * @param int $id
     * @return Account
     */
    public function getAccountById(int $id): Account
    {
        return $this->accounts[$this->positions[$id]];
    }

    /**
     * @return array<Account>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

}
