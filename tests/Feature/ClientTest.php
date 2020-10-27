<?php

namespace FuquGithub\Tests\Feature;

use FuquIo\LaravelGithub\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function can_fetch_repos(){
        $client = new Client();
        $client->repos(['org' => 'fuqu-io']);

        $this->assertEquals(200, $client->status);
    }
}
