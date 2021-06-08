<?php

namespace GeorefAR\Http;

class Response
{
    public bool $ok;
    public int $httpCode;
    public array $body;

    public function __construct($httpCode, $body)
    {
        $this->httpCode = $httpCode;
        $this->body = $body;

        if($httpCode >= 200)
        {
            $this->ok = true;
        }
        else
        {
            $this->ok = false;
        }
    }
}