<?php

namespace Classes;
use Models\User;

class Register
{
    public function __construct(private string $firstName, private string $surName, private string $email,
                                private ?string $phone, private string $password, private string $repeatPaswword){}

    public function register() : bool
    {
        if(!$this->isRegisterValid()) return false;

        $user = new User();
        $user->addUser($this->firstName, $this->surName, $this->email, $this->phone, $this->password);

        return true;
    }
    public function isRegisterValid() : bool
    {
        return $this->isFirstNameValid()
            && $this->isSurNameValid()
            && $this->isEmailValid()
            && $this->isPhoneValid()
            && $this->isPasswordValid()
            && $this->isSamePassword();
    }
    public function isFirstNameValid(): bool
    {
        return preg_match("/^[A-Z][A-Za-z\é\è\ê\-]+$/", $this->firstName)
            && strlen($this->firstName) >= 2
            && strlen($this->firstName) <= 30;
    }

    public function isSurNameValid(): bool
    {
        return preg_match("/^[A-Z][A-Za-z\é\è\ê\-]+$/", $this->surName)
            && strlen($this->surName) >= 2
            && strlen($this->surName) <= 30;
    }

    public function isEmailValid(): bool
    {
        return preg_match('/^[a-zA-Z0-9._]+@[a-z]{2,}\.[a-zA-Z.]+$/', $this->email)
            && strlen($this->email) > 12
            && strlen($this->email) < 50;
    }
    public function isPhoneValid(): bool
    {
        if(is_null($this->phone)) return true;

        return preg_match("/^[0-9]{10}$/", $this->phone);
    }

    public function isPasswordValid(): bool
    {
        return strlen($this->password) >= 8
            && strlen($this->password) <= 30;
    }

    public function isSamePassword(): bool
    {
        return $this->password === $this->repeatPaswword;
    }
}