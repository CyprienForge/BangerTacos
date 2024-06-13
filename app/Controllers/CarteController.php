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

    public function add()
    {
        return Renderer::make('index', []);
    }
}