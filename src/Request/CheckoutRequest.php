<?php


namespace Fypex\BamboocardClient\Request;

use Ramsey\Uuid\UuidInterface;

class CheckoutRequest
{

    private $requestId;
    private $accountId;
    private $products = [];
    private $productsArray = [];

    /**
     * @param UuidInterface $requestId
     */
    public function setRequestId(UuidInterface $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId(int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @param CheckoutProductRequest $product
     */
    public function setProduct(CheckoutProductRequest $product): void
    {

        $this->products[] = $product;

        $this->productsArray[] = [
            'ProductId' => $product->getProductId(),
            'Quantity' => $product->getQuantity(),
            'Value' => $product->getValue(),
        ];

    }

    /**
     * @return UuidInterface
     */
    public function getRequestId(): UuidInterface
    {
        return $this->requestId;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @return CheckoutProductRequest[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProductsArray(): array
    {

        return $this->productsArray;

    }

}
