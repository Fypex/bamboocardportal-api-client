<?php

namespace Fypex\BamboocardClient;

use Fypex\BamboocardClient\Models\ExchangeRatesParams;
use Fypex\GamivoClient\Exception\GeneralException;
use Psr\Http\Message\ResponseInterface;

trait BamboocardHelpers
{

    protected function isJsonResponse(ResponseInterface $response): bool
    {
        $header = $response->getHeader('Content-Type')[0] ?? null;
        [$type,] = explode(';', $header);

        return $type === 'application/json';
    }

    protected function handleResponse(ResponseInterface $response)
    {

        if (!$this->isJsonResponse($response)) {
            throw new GeneralException('Response is not "application/json" type');
        }

        $data = json_decode((string)$response->getBody(), true);

        if ($response->getStatusCode() != 200 && $response->getStatusCode() != 201) {
            throw new GeneralException(json_encode($data), $response->getStatusCode());
        }

        return $data;
    }


}
