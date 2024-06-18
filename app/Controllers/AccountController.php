<?php

namespace Controllers;

use Exceptions\RouteNotFoundException;
use Models\Command;
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

        $command = new Command();
        $commands = $command->getCommandsByOwnerId($user->getId());

        return Renderer::make('account', compact('user', 'commands'));
    }

    public function disconnection() : void
    {
        session_start();
        session_destroy();
    }
}