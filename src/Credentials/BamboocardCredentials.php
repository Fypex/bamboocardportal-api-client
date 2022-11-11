<?php

namespace Fypex\BamboocardClient\Credentials;

class BamboocardCredentials
{
    private $client_id;
    private $secret;

    public function __construct(string $client_id, string $secret)
    {
        $this->client_id = $client_id;
        $this->secret = $secret;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function getHash(): string
    {
        return 'Basic '.base64_encode($this->client_id.':'.$this->secret);
    }

}
