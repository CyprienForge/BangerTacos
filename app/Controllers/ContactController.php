<?php

namespace Controllers;

use Renderer\Renderer;

class ContactController implements IController
{
    public function index(): Renderer
    {
        return Renderer::make('contact', []);
    }
}