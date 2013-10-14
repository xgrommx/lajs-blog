<?php
/**
 * Created by JetBrains PhpStorm.
 * User: flakron
 * Date: 10/7/13
 * Time: 9:29 PM
 * To change this template use File | Settings | File Templates.
 */

namespace flakron\blog\app\tests;


use flakron\blog\app\models\User;

class UserTest extends \TestCase {

	public function setUp() {
		\Artisan::call('migrate');
	}

	public function testTrue() {
		$user = new User();
		$user->id = '1';
		$user->login = 'flakron@gmail.com';

		$this->assertTrue(true);
	}

}