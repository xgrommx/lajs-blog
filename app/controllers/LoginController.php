<?php

namespace flakron\blog\app\controllers;

use flakron\blog\app\services\UserService;

/**
 * Class LoginController
 *
 * @package flakron\blog\app\controllers
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class LoginController extends \BaseController {

	private $userService;

	public function __construct(UserService $userService) {
		$this->userService = $userService;
	}

	public function index() {
		$user = \Input::get('user');

		if($this->userService->authenticate($user))
			echo true;
		else
			echo false;
	}

}