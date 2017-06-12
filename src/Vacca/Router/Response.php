<?php

namespace Vacca\Router;

class Response
{
    /**
     * @var string
     */
    private $body;

    public function send()
    {
        echo $this->body;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}