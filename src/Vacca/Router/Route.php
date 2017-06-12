<?php

namespace Vacca\Router;

class Route
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var mixed
     */
    private $method;

    function __construct($uri, $method)
    {
        $this->setUri($uri);
        $this->setMethod($method);
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }
}