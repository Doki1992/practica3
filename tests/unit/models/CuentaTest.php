<?php

namespace tests\models;

use app\models\Cuenta;

class CuentaTest extends \Codeception\Test\Unit
{
     public function testFindByAccount()
     {
		expect_that($account = Cuenta::findByAccount(1));
   	 }

}
