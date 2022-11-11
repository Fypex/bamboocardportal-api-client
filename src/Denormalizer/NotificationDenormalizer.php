<?php

namespace Fypex\BamboocardClient\Denormalizer;

use Fypex\BamboocardClient\Models\Notification;

class NotificationDenormalizer
{

    /**
     * @param $notification
     * @return Notification
     */
    public static function denormalize($notification): Notification
    {
        return new Notification($notification);

    }

}
