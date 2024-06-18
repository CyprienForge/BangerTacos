<?php

namespace Controllers;

use Models\Basket;
use Models\Command;
use Renderer\Renderer;

class CommandController implements IController
{
    public function index() : Renderer
    {
        $idOwner = $_GET['id'];
        $basket = new Basket();
        $date = date('Y-m-d');
        $quantities = [];

        $price = $basket->getPriceCurrentBasket($idOwner);

        $commands = [
            "hour" => $_POST['time'],
            "price" => $price,
            "date" => $date,
        ];

        $menus = $basket->getCurrentBasketMenus($idOwner);
        $extras = $basket->getCurrentBasketExtras($idOwner);

        $articles = array_merge($menus, $extras);

        for($i = 0; $i < count($articles); $i++)
        {
            $quantities[$i] = (string)$basket->getQuantityArticle($idOwner, $articles[$i]->getId());
        }

        return Renderer::make('command', compact('commands', 'articles' ,'quantities'));
    }

    public function dropBasket() : void
    {
        $idOwner = $_GET['idOwner'];
        $basket = new Basket();

        $basket->dropBasket($idOwner);
    }

    public function createCommand() : void
    {
        $idOwner = $_GET['idOwner'];
        $basket = new Basket();
        $command = new Command();

        $date = date('Y-m-d');
        $price = $basket->getPriceCurrentBasket($idOwner);

        $command->createCommand($idOwner, $_POST['time'], $price, $date);
    }
}