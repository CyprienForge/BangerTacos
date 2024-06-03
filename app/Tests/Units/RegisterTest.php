<?php

namespace Units;

use Classes\Register;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{

    #[DataProviderExternal(ExternalDataProvider::class, 'firstNamesDatas')]
    public function test_isFirstNameValid(bool $expectedResult, string $firstName): void
    {
        $register = new Register($firstName, 'surName', 'email',
            'phone', 'password', 'reseatPassword');

        $result = $register->isFirstNameValid();
        $this->assertEquals($expectedResult, $result);
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'surNamesDatas')]
    public function test_isSurNameValid(bool $expectedResult, string $surName): void
    {
        $register = new Register('firstName', $surName, 'email',
            'phone', 'password', 'reseatPassword');

        $result = $register->isSurNameValid();
        $this->assertEquals($expectedResult, $result);
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'emailDatas')]
    public function test_isEmailValid(bool $expectedResult, string $email): void
    {
        $register = new Register('firstName', 'surName', $email,
            'phone', 'password', 'reseatPassword');

        $result = $register->isEmailValid();
        $this->assertEquals($expectedResult, $result);
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'phoneDatas')]
    public function test_isPhoneValid(bool $expectedResult, string $phone): void
    {
        $register = new Register('firstName', 'surName', 'email',
            $phone, 'password', 'reseatPassword');

        $result = $register->isPhoneValid();
        $this->assertEquals($expectedResult, $result);
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'passwordDatas')]
    public function test_isPasswordValid(bool $expectedResult, string $password): void
    {
        $register = new Register('firstName', 'surName', 'email',
            'phone', $password, 'reseatPassword');

        $result = $register->isPasswordValid();
        $this->assertEquals($expectedResult, $result);
    }

    #[DataProviderExternal(ExternalDataProvider::class, 'samePasswordDatas')]
    public function test_isSamePassword(bool $expectedResult, string $password, string $repeatPassword): void
    {
        $register = new Register('firstName', 'surName', 'email',
            'phone', $password, $repeatPassword);

        $result = $register->isSamePassword();
        $this->assertEquals($expectedResult, $result);
    }
}

final class ExternalDataProvider
{
    public static function firstNamesDatas() : array
    {
        return [
            [true, 'Cyprien'],
            [true, 'Clement'],
            [true, 'Lucas'],
            [true, 'wesh'],
            [false, 'a'],
            [false, 'azertyuiopqsdfghjklmwxcvbnazert'],
            [true, 'GAUTHIER'],
            [false, 'F abien'],
            [false, '_Fabien'],
            [false, 'Youc3f'],
            [false, '']
        ];
    }
    public static function surNamesDatas() : array
    {
        return [
            [true, 'Cyprien'],
            [true, 'Clement'],
            [true, 'Lucas'],
            [true, 'wesh'],
            [false, 'a'],
            [false, 'azertyuiopqsdfghjklmwxcvbnazert'],
            [true, 'GAUTHIER'],
            [false, 'F abien'],
            [false, '_Fabien'],
            [false, 'Youc3f'],
            [false, '']
        ];
    }

    public static function emailDatas() : array
    {
        return [
            [true, 'adressemail@gmail.com'],
            [false, 'aa@gmail.com'],
            [false, 'azertyuiopqsdfghjklmwxcvbnazertyuiopqsdfghjklm@gmail.com'],
            [false, 'MathisGauthier'],
            [false, 'adressemail@gmail.'],
            [false, 'adressemail@.com'],
            [true, 'monadressemail@outlook.fr'],
            [false, '']
        ];
    }

    public static function phoneDatas() : array
    {
        return [
            [false, ''],
            [false, '07'],
            [true, '0764238745'],
            [false, ' 0764238745'],
            [false, '0764238745 '],
            [false, '07642387457'],
            [false, '076423874']
        ];
    }

    public static function passwordDatas() : array
    {
        return [
            [false, ''],
            [false, 'password'],
            [false, 'aaaaa'],
            [true, 'myPassword'],
            [false, 'fshjfsgdjfjdghjdhguiheuighuihguihuighuihtrguhtrghitrguh']
        ];
    }

    public static function samePasswordDatas() : array
    {
        return [
            [true, '', ''],
            [true, 'myPassword', 'myPassword'],
            [false, 'a', 'b'],
            [false, 'a', ' a'],
            [false, ' a', '  a']
        ];
    }

}
