<?php

namespace FuquIo\LaravelGithub;

use FuquIo\ApiGuzzler\Client as Guzzler;
use GuzzleHttp\Client as Guzzle;

class Client extends Guzzler{

    protected static $endpoints = __DIR__ .'/../config/endpoints.ini';

    /**
     * Client constructor.
     *
     * @param string|null $pm
     */
    public function __construct(string $pm = null){
        $this->guzzle = new Guzzle(['base_uri' => 'https://api.github.com',
                                    'headers'  => ['Content-Type'  => 'application/json',
                                                   'Accept'        => 'application/json, text/plain, */*',
                                                   'Authorization' => 'Basic ' . base64_encode(env('GITHUB_USER') . ':' . env('GITHUB_TOKEN'))]
                                   ]);
    }
}
