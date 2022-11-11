<?php


namespace Fypex\BamboocardClient\Models;


class Card
{

    private $id;
    private $serialNumber;
    private $cardCode;
    private $pin;
    private $expirationDate;
    private $status;

    public function __construct(array $card)
    {

        $this->id = $card['id'];
        $this->serialNumber = $card['serialNumber'];
        $this->cardCode = $card['cardCode'];
        $this->pin = $card['pin'];
        $this->expirationDate = $card['expirationDate'];
        $this->status = new Status($card['status']);

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getSerialNumber(): int
    {
        return $this->serialNumber;
    }

    /**
     * @return String
     */
    public function getCardCode(): String
    {
        return $this->cardCode;
    }

    /**
     * @return int
     */
    public function getPin(): int
    {
        return $this->pin;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}
