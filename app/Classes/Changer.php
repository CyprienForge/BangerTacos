<?php

namespace Classes;

use Models\User;

class Changer
{
    public function __construct(private int $id,
                                private string $newSurName,
                                private string $newFirstName,
                                private string $newEmail,
                                private string $newPhone)
    {}

    public function isChangeValid() : bool
    {
        return $this->isFirstNameValid() &&
               $this->isSurNameValid() &&
               $this->isEmailValid() &&
               $this->isPhoneValid();
    }

    public function isFirstNameValid() : bool
    {
        return preg_match("/^[A-Za-z\é\è\ê\-]+$/", $this->newFirstName)
            && strlen($this->newFirstName) >= 2
            && strlen($this->newFirstName) <= 30;
    }

    public function isSurNameValid(): bool
    {
        return preg_match("/^[A-Za-z\é\è\ê\-]+$/", $this->newSurName)
            && strlen($this->newSurName) >= 2
            && strlen($this->newSurName) <= 30;
    }
    public function isEmailValid(): bool
    {
        return preg_match('/^[a-zA-Z0-9._]+@[a-z]{2,}\.[a-zA-Z.]{2,}$/', $this->newEmail)
            && strlen($this->newEmail) > 12
            && strlen($this->newEmail) < 50;
    }

    public function isPhoneValid(): bool
    {
        return preg_match("/^[0-9]{10}$/", $this->newPhone);
    }

    public function isSameUser() : bool
    {
        $user = new User();

        $user = $user->getById($this->id);

        if($user->getEmail() == $this->newEmail
            && $user->getSurName() == $this->newSurName
            && $user->getFirstName() == $this->newFirstName
            && $user->getPhone() == $this->newPhone)
        {
            return true;
        }
        return false;
    }

    public function changeInfos()
    {
        $user = new User();

        $user->updateById($this->newFirstName, $this->newSurName, $this->newEmail, $this->newPhone, $this->id);
    }

}