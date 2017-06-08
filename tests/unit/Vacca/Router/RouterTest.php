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
}
