<?php

namespace Controllers;

use Renderer\Renderer;

class HomeController implements IController
{
    public function index() : Renderer
    {
        return Renderer::make('index', []);
    }
}