<?php

namespace tests\models;

use app\models\UserP;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        expect_that($user = UserP::findIdentity(1));
        expect($user->username)->equals('duglas');

        expect_not(UserP::findIdentity(999));
    }

    public function testFindUserByUsername()
    {
        expect_that($user = UserP::findByUsername('duglas'));
        expect_not(UserP::findByUsername('not-admin'));
    }

    /**
     * @depends testFindUserByUsername
     */
    public function testValidateUser($user)
    {
        $user = UserP::findIdentity(1);
        expect_that($user->validateAuthKey('duglas'));
        expect_not($user->validateAuthKey('test102key'));

        expect_that($user->validatePassword('duglas'));
        expect_not($user->validatePassword('123456'));        
    }

}
