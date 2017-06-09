<?php

namespace Vacca\Router;

class Router
{
    /**
     * @var Route[]
     */
    private $routes;

    /**
     * @param string $uri
     * @param mixed $mixed
     */
    public function get($uri, $mixed)
    {
        $this->routes[] = new Route($uri, $mixed);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function handle($request)
    {
        return new Response();
    }
}