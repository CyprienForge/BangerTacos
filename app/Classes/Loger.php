<?php
namespace Classes;

use Models\User;

class Loger
{
    public function __construct(private string $email, private string $password){}

    public function getUserId() : int
    {
        $user = new User();

        $id = $user->getUserId($this->email);

        return $id;
    }
    public function login() : bool
    {
        if(!$this->isLoginValid()) return false;

        session_start();
        $_SESSION['email'] = $this->email;
        $_SESSION['id'] = $this->getUserId();

        return true;
    }
    public function isLoginValid() : bool
    {
        return $this->isAccountExists() && $this->isGoodPassword();
    }
    public function isAccountExists(): bool
    {
        $user = new User();

        return !$user->isEmailAvailable($this->email);
    }

    public function isGoodPassword() : bool
    {
        $user = new User();

        $passwordHash = $user->searchPassword($this->email);

        return password_verify($this->password, $passwordHash);
    }
}