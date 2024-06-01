<?php

namespace Controllers;

use Renderer\Renderer;

interface IController
{
    public function index() : Renderer;
}