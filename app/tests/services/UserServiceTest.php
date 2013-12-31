<?php
namespace tests\services;
use flakron\blog\app\services\impl\UserServiceImpl;

/**
 * Class UserServiceTest
 *
 * @package tests\services
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class UserServiceTest extends \TestCase {

	private $userService;

	public function setUp() {
		\Artisan::call('migrate:refresh');
		\Artisan::call('db:seed');

		$this->userService = new UserServiceImpl();
	}

	public function testFetchByLogin() {
		$user = $this->userService->fetchByLogin('test@test.com');

		$this->assertNotNull($user);
	}

	public function testFetchByLoginNull() {
		$user = $this->userService->fetchByLogin('test1@test.com');

		$this->assertNull($user);
	}

	public function testAuthenticate() {
		$user['login'] = 'test@test.com';
		$user['password'] = 'test';

		$this->assertTrue($this->userService->authenticate($user));
	}

	public function testAuthenticateFail() {
		$user['login'] = 'test@test.com';
		$user['password'] = 'test1';

		$this->assertFalse($this->userService->authenticate($user));
	}

} 