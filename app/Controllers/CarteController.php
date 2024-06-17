<?php

namespace Controllers;

use Models\Basket;
use Models\Menu;
use Renderer\Renderer;

class CarteController implements IController
{
    public function index() : Renderer
    {
        $menu = new Menu();

        $menus = $menu->getMenus();

        return Renderer::make('carte', ['menus' => $menus]);
    }
    public function add() : void
    {
        $idOwner = $_GET['idOwner'];
        $idProduct = $_GET['idProduct'];

        $basket = new Basket();

        if($basket->isAlreadyInBasket($idOwner, $idProduct))
        {
            $basket->addOneUnit($idOwner, $idProduct);
        }
        else
        {
            $basket->addProduct($idOwner, $idProduct);
        }
    }
}