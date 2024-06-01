<?php

namespace Controllers;

use Renderer\Renderer;

class RegistrationController implements IController
{
    public function index(): Renderer
    {
        return Renderer::make('registration', []);
    }
}