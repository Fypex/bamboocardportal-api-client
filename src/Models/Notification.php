<?php

namespace Fypex\BamboocardClient\Models;

class Notification
{

    private $notificationUrl;
    private $secretKey;

    public function __construct($notification)
    {

        $this->notificationUrl = $notification['notificationUrl'];
        $this->secretKey = $notification['secretKey'];

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
