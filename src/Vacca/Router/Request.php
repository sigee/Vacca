<?php

namespace Vacca\Router;

class Request
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var string
     */
    private $method;
    /**
     * @var array|false
     */
    private $headers;

    function __construct($server = null)
    {
        if (is_null($server)) {
            $server = $_SERVER;
        }
        $this->uri = $server['REQUEST_URI'];
        $this->method = $server['REQUEST_METHOD'];
        if (function_exists('getallheaders')) {
            $this->headers = getallheaders();
        }
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
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return array|false
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array|false $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
}