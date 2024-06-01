<?php

namespace Controllers;

use Renderer\Renderer;

class ConnectionController implements IController
{
    public function index(): Renderer
    {
        return Renderer::make('connection', []);
    }
}