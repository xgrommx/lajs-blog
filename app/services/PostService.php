<?php

namespace flakron\blog\app\services;

/**
 * Class PostService
 *
 * @package flakron\blog\app\services
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
interface PostService extends AppService {

	/**
	 * Fetch all Posts
	 *
	 * @return mixed
	 */
	public function fetchAll();

}