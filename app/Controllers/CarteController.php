<?php

namespace Controllers;

use Models\Basket;
use Models\Extra;
use Models\Menu;
use Renderer\Renderer;

class CarteController implements IController
{
    public function index() : Renderer
    {
        $menu = new Menu();
        $extra = new Extra();

        $menus = $menu->getMenus();
        $extras = $extra->getExtras();

        return Renderer::make('carte', compact('menus', 'extras'));
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

    public function addExtra() : void
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