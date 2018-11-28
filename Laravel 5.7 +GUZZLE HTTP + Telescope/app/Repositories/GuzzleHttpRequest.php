<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function get($url)
    {
        $response = $this->client->request('GET', $url);

        return  json_decode($response->getBody()->getContents());
    }

    public function post($url)
    {
        $response = $this->client->request('POST', $url, [
            'form_params' => [
                'field_name' => 'abc',
                'other_field' => '123',
                'nested_field' => [
                    'nested' => 'hello'
                ]
            ]
        ]);

        return  json_encode($response);
    }


}