<?php

namespace Fypex\BamboocardClient\Credentials;

class BamboocardCredentials
{
    private $client_id;
    private $secret;

    private $dev_client_id;
    private $dev_secret;

    public function __construct(
        string $dev_client_id,
        string $dev_secret,
        string $client_id = '',
        string $secret = ''
    )
    {
        $this->dev_client_id = $dev_client_id;
        $this->dev_secret = $dev_secret;

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

    public function getDevClientId(): string
    {
        return $this->dev_client_id;
    }

    public function getDevSecret(): string
    {
        return $this->dev_secret;
    }


    public function getHash($dev = false): string
    {
        if ($dev){
            return 'Basic '.base64_encode($this->dev_client_id.':'.$this->dev_secret);
        }

        return 'Basic '.base64_encode($this->client_id.':'.$this->secret);
    }

}
