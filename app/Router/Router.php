<?php

namespace Router;

use Exceptions\RouteNotFoundException;

class Router
{
    private array $routes = [];

    public function getRoutes() : array
    {
        return $this->routes;
    }
    public function register(string $HTTPVerb, string $path, array $action) : void
    {
        $this->routes[$HTTPVerb][$path] = $action;
    }

    public function createRoute(string $uri, string $method)
    {
        $path = explode('?', $uri)[0];

        $action = $this->routes[$method][$path] ?? null;

        [$className, $methodName] = $action;

        if(class_exists($className ?? "") && method_exists($className, $methodName))
        {
            $class = new $className();
            return call_user_func([$class, $methodName], []);
        }
        throw new RouteNotFoundException();
    }
}