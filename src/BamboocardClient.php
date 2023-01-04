<?php

namespace Fypex\BamboocardClient;

use Fypex\BamboocardClient\Credentials\BamboocardCredentials;
use Fypex\BamboocardClient\Denormalizer\AccountsDenormalizer;
use Fypex\BamboocardClient\Denormalizer\CatalogDenormalizer;
use Fypex\BamboocardClient\Denormalizer\ExchangeRatesDenormalizer;
use Fypex\BamboocardClient\Denormalizer\NotificationDenormalizer;
use Fypex\BamboocardClient\Denormalizer\OrderDenormalizer;
use Fypex\BamboocardClient\Models\Account;
use Fypex\BamboocardClient\Models\Accounts;
use Fypex\BamboocardClient\Models\Brand;
use Fypex\BamboocardClient\Models\Brands;
use Fypex\BamboocardClient\Models\ExchangeRatesParams;
use Fypex\BamboocardClient\Models\Notification;
use Fypex\BamboocardClient\Models\Order;
use Fypex\BamboocardClient\Models\Rates;
use Fypex\BamboocardClient\Request\CheckoutRequest;
use Fypex\BamboocardClient\Request\NotificationRequest;
use Fypex\GamivoClient\Exception\GeneralException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class BamboocardClient
{

    use BamboocardHelpers;

    protected $client;
    protected $credentials;

    public function __construct(BamboocardCredentials $credentials, $dev = false)
    {

        $this->client = new Client([
            'base_uri' => $dev ? Bamboocard::SANDBOX_URL : Bamboocard::DEFAULT_URL,
            'verify' => false,
            'headers' => [
                'Accept' => '*/*',
                'Authorization' => $credentials->getHash($dev),
            ]
        ]);

        $this->credentials = $credentials;

    }

    /**
     * @return Accounts
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function accounts(): Accounts
    {

        $response = $this->client->get(Bamboocard::accounts);

        $data = $this->handleResponse($response);

        return AccountsDenormalizer::denormalize($data['accounts']);

    }

    /**
     * @return Brands
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function catalog(): Brands
    {

        $response = $this->client->get(Bamboocard::catalog);

        $data = $this->handleResponse($response);

        return CatalogDenormalizer::denormalize($data['brands']);

    }

    /**
     * @param ExchangeRatesParams $params
     * @return Rates
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function exchangeRates(ExchangeRatesParams $params): Rates
    {

        $response = $this->client->get(Bamboocard::exchangeRatesUri($params));

        $data = $this->handleResponse($response);

        return ExchangeRatesDenormalizer::denormalize($data);

    }

    /**
     * @param NotificationRequest $notification
     * @return Notification
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function notification(NotificationRequest $notification): Notification
    {

        $body = [
            'json' => [
                'notificationUrl' => $notification->getNotificationUrl(),
                'secretKey' =>  $notification->getSecretKey(),
            ]
        ];

        $response = $this->client->post(Bamboocard::notification, $body);

        $data = $this->handleResponse($response);

        return NotificationDenormalizer::denormalize($data);
    }

    /**
     * @return Notification
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function getNotification(): Notification
    {

        $response = $this->client->get(Bamboocard::notification);

        $data = $this->handleResponse($response);

        return NotificationDenormalizer::denormalize($data);
    }

    /**
     * @param CheckoutRequest $checkout
     * @return UuidInterface
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function checkout(CheckoutRequest $checkout): UuidInterface
    {
        $body = [
            'json' => [
                'RequestId' => $checkout->getRequestId()->toString(),
                'AccountId' => $checkout->getAccountId(),
                'Products' => $checkout->getProductsArray(),
            ]
        ];

        $response = $this->client->post(Bamboocard::checkout, $body);

        $data = $this->handleResponse($response);

        return Uuid::fromString($data);

    }

    /**
     * @param UuidInterface $requestId
     * @throws GeneralException
     * @throws GuzzleException
     */
    public function getOrder(UuidInterface $requestId): Order
    {

        $response = $this->client->get(Bamboocard::getOrderUri($requestId));

        $data = $this->handleResponse($response);

        return OrderDenormalizer::denormalize($data);

    }

}
