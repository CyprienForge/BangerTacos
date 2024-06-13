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
        $namesProduct = [];
        $basket = new Basket();

        $baskets = $basket->getArticlesByOwnerId($this->getId());

        for($i = 0; $i < count($baskets); $i++)
        {
            $namesProduct[$i] = (string)$baskets[$i]->getArticleNameById($baskets[$i]->getIdProduct());
        }

        return Renderer::make('basket', compact('baskets', 'namesProduct'));
    }
}