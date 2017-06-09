<?php

namespace Vacca\Router;

class Router
{
    /**
     * @var Route[]
     */
    private $routes = [];

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
    public function handle($request = null)
    {
        if (is_null($request)) {
            $request = new Request();
        }
        $response = new Response();
        foreach ($this->routes as $route) {
            $requestUriWithoutParameters = $this->ignoreParameters($request->getUri());
            if ($route->getUri() == $requestUriWithoutParameters) {
                $result = call_user_func($route->getMethod());
                $response->setBody($result);
            }
        }
        return $response;
    }

    /**
     * @param string $uri
     * @return string
     */
    private function ignoreParameters($uri)
    {
        return explode('?', $uri)[0];
    }
}