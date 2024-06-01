<?php

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR);
require_once('../build/vendor/autoload.php');
use Router\Router;
use Exceptions\RouteNotFoundException;

$router = new Router();

$router->register('GET','/',['Controllers\HomeController','index']);
$router->register('GET','/carte', ['Controllers\CarteController','index']);
$router->register('GET', '/connection', ['Controllers\ConnectionController','index']);
$router->register('POST', '/connection', ['Controllers\ConnectionController','index']);
$router->register('GET', '/registration', ['Controllers\RegistrationController','index']);
$router->register('POST', '/registration', ['Controllers\RegistrationController','index']);

try
{
    $router->createRoute($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
}
catch(RouteNotFoundException $e)
{
    echo $e->getMessage();
}