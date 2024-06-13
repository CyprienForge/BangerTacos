<?php

namespace Controllers;

use Exceptions\RouteNotFoundException;
use Models\Basket;
use Renderer\Renderer;

class BasketController implements IController
{
    public function getId() : int
    {
        return intval($_GET['id']);
    }

    public function index(): Renderer
    {

        $basket = new Basket();

        $baskets = $basket->getArticlesByOwnerId($this->getId());

        if($baskets == null) throw new RouteNotFoundException();

        return Renderer::make('basket', []);
    }
}