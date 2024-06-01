<?php

namespace Units;

use Classes\Register;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{

    #[DataProvider('firstNamesDatas')]
    #[TestDox('Adding $a to $b results in $expected')]
    public function test_isFirstNameValid(bool $expectedResult, string $firstName) : void
    {
        $register = new Register('Clement', 'surName', 'email',
                                    'phone', 'password', 'reseatPassword');

        $result = $register->isFirstNameValid();
        $this->assertEquals(true, $result);
    }

    public static function firstNamesDatas()
    {
        return [
            [true, 'Cyprien'],
            [true, 'Clement'],
            [true, 'Lucas'],
            [true, 'wesh'],
            [false, 'a']
        ];
    }
}