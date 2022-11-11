<?php


namespace Fypex\BamboocardClient\Response;


class NotificationCallbackResponse
{

    private $orderId;
    private $status;
    private $totalCards;
    private $createdOn;
    private $completedOn;
    private $secretKey;
    private $requestId;

    public function __construct(array $data)
    {

        $this->orderId = $data['orderId'];
        $this->status = $data['status'];
        $this->totalCards = $data['totalCards'];
        $this->createdOn = $data['createdOn'];
        $this->completedOn = $data['completedOn'];
        $this->secretKey = $data['secretKey'];
        $this->requestId = $data['requestId'];

    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getTotalCards()
    {
        return $this->totalCards;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @return mixed
     */
    public function getCompletedOn()
    {
        return $this->completedOn;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

}
