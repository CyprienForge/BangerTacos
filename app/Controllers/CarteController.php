<?php

namespace Controllers;

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
}