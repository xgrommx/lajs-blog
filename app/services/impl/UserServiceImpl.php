<?php

namespace flakron\blog\app\services\impl;

use flakron\blog\app\models\User;
use flakron\blog\app\services\AppService;
use flakron\blog\app\services\UserService;

/**
 * Class UserServiceImpl
 * @package flakron\blog\app\services\impl
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class UserServiceImpl implements UserService {

	/**
	 * Fetch user by its login
	 *
	 * @param String $login
	 * @return User
	 */
	public function fetchByLogin($login) {
		return User::where('login', $login)->first();
	}

	/**
	 * Authenticate user login and password
	 *
	 * @param array $user
	 * @return boolean
	 */
	public function authenticate($user) {
		$dbUser = $this->fetchByLogin($user['login']);

		if ($dbUser != null && $dbUser->login == $user['login'] && \Hash::check($dbUser->salt . $user['password'], $dbUser->password)) {
			\Auth::login($dbUser);
			return true;
		} else {
			return false;
		}
	}
}