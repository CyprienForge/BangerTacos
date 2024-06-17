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

        $price = $basket->getPriceCurrentBasket($id);
        // $basket->dropBasket($id);

        $command->createCommand($id, $_POST['time'], $price);

        $commands = [
            "id" => $id,
            "hour" => $_POST['time'],
            "price" => $price,
        ];

        return Renderer::make('command', compact('commands'));
    }
}