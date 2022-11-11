<?php


namespace Fypex\BamboocardClient\Request;

class CheckoutProductRequest
{

    private $productId;
    private $quantity;
    private $value;

    /**
     * @param mixed $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param mixed $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

}
