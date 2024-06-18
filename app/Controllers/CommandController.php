<?php

namespace Controllers;

use Models\Basket;
use Models\Command;
use Renderer\Renderer;

class CommandController implements IController
{
    public function index() : Renderer
    {
        $id = $_GET['id'];
        $command = new Command();
        $basket = new Basket();
        $date = date('Y-m-d');
        $quantities = [];

        $price = $basket->getPriceCurrentBasket($id);
        // $basket->dropBasket($id);

        $command->createCommand($id, $_POST['time'], $price, $date);

        $commands = [
            "id" => $id,
            "hour" => $_POST['time'],
            "price" => $price,
            "date" => $date,
        ];

        $articles = $basket->getCurrentBasket($id);

        var_dump($articles);
        exit(1);

        for($i = 0; $i < count($articles); $i++)
        {
            $quantities[$i] = (string)$basket->getQuantityArticle($id, $articles[$i]->getId());
        }

        return Renderer::make('command', compact('commands', 'articles', 'quantities'));
    }

    public function dropBasket() : void
    {
        $idOwner = $_GET['idOwner'];
        $basket = new Basket();

        $basket->dropBasket($idOwner);
    }
}