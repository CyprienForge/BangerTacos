<?php

namespace Tests\Units;
use PHPUnit\Framework\TestCase;
use Router\Router;

class RouterTest extends TestCase
{
    public function test_it_doesnt_register_routes() : void
    {
        $router = new Router();
        $this->assertEmpty($router->getRoutes());
    }

    public function test_it_register_get_routes() : void
    {
        $router = new Router();
        $router->register('GET','/',['MyClass', 'MyMethodIntoClass']);

        $this->assertNotEmpty($router->getRoutes());
    }

    public function test_it_register_post_routes() : void
    {
        $router = new Router();
        $router->register('POST','/',['MyClass', 'MyMethodIntoClass']);

        $this->assertNotEmpty($router->getRoutes());
    }
}