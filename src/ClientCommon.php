<?php namespace stcom77\Poloniex;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class ClientCommon
{

    protected $apiUrl;
    protected $content;

    public function __construct($apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    public function getQuery($queryOptions, $clientOptions = [], $timeout = 2)
    {
        $client   = new Client(array_merge([
            'base_uri' => $this->apiUrl,
            'timeout'  => $timeout,
        ], $clientOptions));
        $response = $client->get("", [RequestOptions::QUERY => $queryOptions, RequestOptions::TIMEOUT => $timeout]);

        $this->content = $response->getBody()->getContents();

        return $this;
    }

    public function postQuery($queryOptions, $clientOptions = [], $timeout = 2)
    {
        $mt                    = explode(' ', microtime());
        $queryOptions['nonce'] = $mt[1] . substr($mt[0], 2, 3);
        $post_data             = http_build_query($queryOptions, '', '&');
        $sign                  = hash_hmac('sha512', $post_data, $this->sign);
        $headers               = [
            'Key'          => $this->key,
            'Sign'         => $sign,
            'Content-type' => 'application/x-www-form-urlencoded; charset=utf-8',
        ];
        $client                = new Client(array_merge([
            'base_uri' => $this->apiUrl,
            'timeout'  => $timeout,
        ], $clientOptions));
        $response              = $client->post("", [RequestOptions::BODY => $post_data, RequestOptions::QUERY => $post_data, RequestOptions::HEADERS => $headers, RequestOptions::TIMEOUT => $timeout]);

        $this->content = $response->getBody()->getContents();

        return $this;
    }

    public function __toString()
    {
        return $this->content;
    }

    public function json($assoc = true, $jsonOptions = 0)
    {
        return json_decode($this->content, $assoc, 512, $jsonOptions);
    }

    public function getResult()
    {
        return $this->content;
    }
}
