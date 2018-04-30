<?php

namespace tests\models;

use app\models\UserPSearch;

class UserPSearchTest extends \Codeception\Test\Unit
{
   public function testSearch()
    {
        expect_that($provider = UserPSearch::search(Yii::$app->request->post()));
    }
}
