<?php

namespace Controllers;

use Renderer\Renderer;

class CarteController implements IController
{
    public function index() : Renderer
    {
        return Renderer::make('carte', []);
    }
}