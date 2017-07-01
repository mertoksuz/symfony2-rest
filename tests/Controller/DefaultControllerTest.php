<?php

namespace Tests\Controller;

use Lakion\ApiTestCase\JsonApiTestCase;

/**
 * Class DefaultControllerTest
 * @package Tests\Controller
 */
class DefaultControllerTest extends JsonApiTestCase
{
    public function testGetHelloWorldResponse()
    {
        $this->client->request('GET', '/api/homes');

        $response = $this->client->getResponse();

        $this->assertResponse($response, 'hello_world');
    }
}
