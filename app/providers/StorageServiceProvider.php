<?php

namespace flakron\blog\app\providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class StorageServiceProvider
 *
 * @package flakron\blog\app\providers
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class StorageServiceProvider extends ServiceProvider {

	public function register() {
		/**
		 * UserService
		 */
		$this->app->bind('flakron\blog\app\services\UserService', 'flakron\blog\app\services\impl\UserServiceImpl');

		/**
		 * PostService
		 */
		$this->app->bind('flakron\blog\app\services\PostService', 'flakron\blog\app\services\impl\PostServiceImpl');
	}

}