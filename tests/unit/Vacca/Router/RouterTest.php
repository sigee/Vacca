<?php

namespace Vacca\Router;

use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /** @var Router */
    private $router;

    function setUp()
    {
        parent::setUp();
        $this->router = new Router();
    }

    function tearDown()
    {
        parent::tearDown();
        $this->router = null;
    }

    function testShouldHaveAGetMethod()
    {
        $this->router->get(null, null);
    }

    function testShouldHaveAHandleMethod()
    {
        $_SERVER['REQUEST_URI'] = '';
        $_SERVER['REQUEST_METHOD'] = '';
        $this->router->handle(null);
    }

    function testHandleShouldReturnWithAResponse()
    {
        $stubRequest = $this->createMock(Request::class);
        $response = $this->router->handle($stubRequest);
        $this->assertInstanceOf(Response::class, $response);
    }

    function testHandleShouldCallMethodRelatedToUri()
    {
        $called = false;
        $this->router->get('/', function () use (&$called) { $called = true; });
        $_SERVER['REQUEST_URI'] = '/';
        $_SERVER['REQUEST_METHOD'] = 'get';
        $this->router->handle(null);
        $this->assertTrue($called);
    }
}
