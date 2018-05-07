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




}
