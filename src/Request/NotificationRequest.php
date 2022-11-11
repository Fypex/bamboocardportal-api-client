<?php


namespace Fypex\BamboocardClient\Request;

use Ramsey\Uuid\UuidInterface;

class NotificationRequest
{

    private $notificationUrl;
    private $secretKey;

    public function setNotificationUrl(String $notificationUrl): void
    {
        $this->notificationUrl = $notificationUrl;
    }

    /**
     * @param string $secretKey
     */
    public function setSecretKey(string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return string
     */
    public function getNotificationUrl(): string
    {
        return $this->notificationUrl;
    }

    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

}
