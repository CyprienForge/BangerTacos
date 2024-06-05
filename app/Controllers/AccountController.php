<?php

namespace Controllers;

use Exceptions\RouteNotFoundException;
use Models\User;
use Renderer\Renderer;

class AccountController implements IController
{
    public function getId() : int
    {
        return intval($_GET['id']);
    }
    public function index() : Renderer
    {
        $user = new User();

        $user = $user->getById($this->getId());

        if($user == null) throw new RouteNotFoundException();

        return Renderer::make('account', ['user' => $user]);
    }
}