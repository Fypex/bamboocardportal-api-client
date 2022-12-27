<?php

namespace Fypex\BamboocardClient;

use Fypex\BamboocardClient\Models\ExchangeRatesParams;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class Bamboocard
{

    public const SANDBOX_URL = 'https://api-stage.bamboocardportal.com/api/integration/v1.0/';
    public const DEFAULT_URL = 'https://api.bamboocardportal.com/api/integration/v1.0/';

    public const accounts = 'accounts';
    public const catalog = 'catalog';
    public const exchange_rates = 'exchange-rates';
    public const checkout = 'orders/checkout';
    public const notification = 'notification';
    public const get_order = 'orders/';

    public static function exchangeRatesUri(ExchangeRatesParams $params): string
    {

        $params = http_build_query([
            'baseCurrency' => $params->getBaseCurrency(),
            'currency' => $params->getCurrency(),
        ]);

        return self::exchange_rates.'?'.$params;
    }

    public static function getOrderUri(UuidInterface $param): string
    {
        return self::get_order.$param->toString();
    }

}
