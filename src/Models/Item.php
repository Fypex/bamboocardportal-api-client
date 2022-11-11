<?php


namespace Fypex\BamboocardClient\Models;


use Fypex\BamboocardClient\Denormalizer\CardsDenormalizer;

class Item
{

    private $brandCode;
    private $productId;
    private $productFaceValue;
    private $quantity;
    private $pictureUrl;
    private $countryCode;
    private $currencyCode;
    private $cards = [];


    public function __construct(array $item)
    {

        $this->brandCode = $item['brandCode'];
        $this->productId = $item['productId'];
        $this->productFaceValue = $item['productFaceValue'];
        $this->quantity = $item['quantity'];
        $this->pictureUrl = $item['pictureUrl'];
        $this->countryCode = $item['countryCode'];
        $this->currencyCode = $item['currencyCode'];
        $this->cards = CardsDenormalizer::denormalize($item['cards']);

    }

    /**
     * @return string
     */
    public function getBrandCode(): ?string
    {
        return $this->brandCode;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return float
     */
    public function getProductFaceValue(): float
    {
        return $this->productFaceValue;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

}
