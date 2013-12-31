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
		\Artisan::call('migrate');
		\Artisan::call('db:seed');

		$this->userService = new UserServiceImpl();
	}

	public function testFetchByLogin() {
		$user = $this->userService->fetchByLogin('test@test.com');

		$this->assertNotNull($user);
	}

} 