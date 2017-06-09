<?php

namespace Vacca\Router;

use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    /** @var Response */
    private $response;

    function setUp()
    {
        parent::setUp();
        $this->response = new Response();
    }

    function tearDown()
    {
        parent::tearDown();
        $this->response = null;
    }

    function testShouldHaveASendMethod()
    {
        $this->response->send();
    }

    function testShouldHaveAGetBodyMethod()
    {
        $this->response->getBody();
    }
}
