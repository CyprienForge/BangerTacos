<?php

namespace Classes;

use Models\User;

class Changer
{
    public function __construct(private int $id,
                                private string $newSurName,
                                private string $newFirstName,
                                private string $newEmail,
                                private string $newPhone){}

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