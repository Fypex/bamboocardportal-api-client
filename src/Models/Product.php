<?php


namespace Fypex\BamboocardClient\Models;


class Product
{

    private $id;
    private $name;
    private $minFaceValue;
    private $maxFaceValue;
    private $count;
    private $price;
    private $modifiedDate;

    public function __construct(array $product)
    {

        $this->id = $product['id'];
        $this->name = $product['name'];
        $this->minFaceValue = $product['minFaceValue'];
        $this->maxFaceValue = $product['maxFaceValue'];
        $this->count = $product['count'];
        $this->price = new Price($product['price']);
        $this->modifiedDate = $product['modifiedDate'];

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getMinFaceValue(): float
    {
        return $this->minFaceValue;
    }

    /**
     * @return float
     */
    public function getMaxFaceValue(): float
    {
        return $this->maxFaceValue;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->modifiedDate;
    }



}
