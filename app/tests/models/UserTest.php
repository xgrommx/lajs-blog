<?php
namespace flakron\blog\app\tests\models;

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