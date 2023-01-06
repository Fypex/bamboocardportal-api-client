<?php

namespace Fypex\BamboocardClient\Models;

use Fypex\BamboocardClient\Denormalizer\ItemsDenormalizer;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class Order
{

    private $orderId;
    private $requestId;
    private $items;
    private $status;
    private $createdDate;
    private $total;
    private $errorMessage;

    public function __construct($order)
    {

        $this->orderId = $order['orderId'];
        $this->requestId = Uuid::fromString($order['requestId']);
        $this->items = ItemsDenormalizer::denormalize($order['items']);
        $this->status = new Status($order['status']);
        $this->createdDate = $order['createdDate'];
        $this->total = $order['total'];
        $this->errorMessage = $order['errorMessage'];

    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @return UuidInterface
     */
    public function getRequestId(): UuidInterface
    {
        return $this->requestId;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }



}
