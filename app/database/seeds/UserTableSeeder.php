<?php

class UserTableSeeder extends Seeder {

	public function run() {
		$user = new \flakron\blog\app\models\User();
		$user->id = 'test';
		$user->login = 'test@test.com';
		$user->salt = uniqid();
		$user->password = \Hash::make($user->salt . 'test');
		$user->active = true;

		$user->save();
	}

} 