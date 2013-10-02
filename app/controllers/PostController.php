<?php

namespace flakron\blog\app\controllers;
use flakron\blog\app\services\PostService;

/**
 * Class PostController
 * @package flakron\blog\app\controllers
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class PostController extends \BaseController {

	private $postService;

	public function __construct(PostService $postService) {
		$this->postService = $postService;
	}

	public function index($count) {
		$posts = array();
		for($i = 0; $i < $count; $i++) {
			$post['title'] = "Hello $i";
			$post['body'] = "Body $i";

			$posts[] = $post;
		}

		echo json_encode($posts);
	}

}