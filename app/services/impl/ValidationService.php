<?php
/**
 * Created by JetBrains PhpStorm.
 * User: flakron
 * Date: 10/7/13
 * Time: 10:12 PM
 * To change this template use File | Settings | File Templates.
 */

namespace flakron\blog\app\services\impl;


use flakron\blog\app\services\AppService;

class ValidationService implements AppService {

	private $appService;

	public function __construct(AppService $appService) {
		$this->appService = $appService;
	}

	public function __call($method, $args) {
		var_dump($args);

		return call_user_func_array(array($this->appService, $method), $args);
	}

}