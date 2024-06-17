<?php

namespace Controllers;

use Exceptions\RouteNotFoundException;
use Models\Basket;
use Models\User;
use Renderer\Renderer;

class BasketController implements IController
{
    public function getId() : int
    {
        return intval($_GET['id']);
    }
    public function index(): Renderer
    {
        $user = new User();

        $user = $user->getById($this->getId());

        if($user == null) throw new RouteNotFoundException();

        $namesProduct = [];
        $pricesProduct = [];
        $priceTotal = 0;
        $reduction = 0;

        $basket = new Basket();

        $baskets = $basket->getArticlesByOwnerId($this->getId());

        for($i = 0; $i < count($baskets); $i++)
        {
            $namesProduct[$i] = (string)$baskets[$i]->getArticleNameById($baskets[$i]->getIdProduct());
            $pricesProduct[$i] = (string)$baskets[$i]->getArticlePriceById($baskets[$i]->getIdProduct());
            $priceTotal += (float)$pricesProduct[$i]*$baskets[$i]->getUnits();
        }

        $reduction = (int)$priceTotal / 2;

        return Renderer::make('basket', compact('baskets', 'namesProduct', 'pricesProduct', 'priceTotal', 'reduction'));
    }

    public function delete() : void
    {
        $idOwner = $_GET['idOwner'];
        $idProduct = $_GET['idProduct'];

        $basket = new Basket();

        $basket->deleteArticle($idOwner, $idProduct);
    }
}