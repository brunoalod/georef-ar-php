<?php

namespace GeorefAR\Http;

class HttpClient
{
    protected string $baseUrl = 'https://apis.datos.gob.ar/georef/api'; 

    protected array $params = [];

    protected string $method = 'GET';

    protected string $url = '';

    public function get($url) : HttpClient
    {
        $this->method = 'GET';
        $this->url = $url;

        return $this;
    }

    public function param($key, $value)
    {
        $this->params[$key] = $value;

        return $this;
    }

    public function params($params)
    {
        $this->params = $params;

        return $this;
    }

    public function getUrl()
    {
        $params = array_merge($this->params, ['max' => 5000]);

        return $this->baseUrl . $this->url . (count($this->params) > 0  ? '?' . http_build_query($params) : '');
    }

    public function process() : Response
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getUrl()); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $data = curl_exec($ch); 
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return new Response($httpCode, json_decode($data, true));
    }
}