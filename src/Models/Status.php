<?php


namespace Fypex\BamboocardClient\Models;


class Status
{

    private $status;
    private $explanation;




    public function __construct(string $status)
    {

        $explanations = [
            'Paused' => 'We are waiting for these cards from different channels.',
            'Sold' => 'Cards that were successfully purchased.',
            'Failed' => 'Cards that were Failed and we won’t charge for them.',
            'PartialFailed' => 'That means that some cards were bought but some were not',
            'Created' => 'Order processing has not started yet.',
            'Processing' => 'We are processing your card in the system.',
            'CheckingOut' => '',
            'Succeeded' => 'Successfully processed'
        ];

        $this->status = $status;
        $this->explanation = $explanations[$status];

    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

}
