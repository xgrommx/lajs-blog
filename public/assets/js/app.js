'use strict';

var blog = angular.module('blog', ['ui.router']);

blog.config(function($stateProvider, $urlRouterProvider) {
	//
	// For any unmatched url, redirect to /state1
	$urlRouterProvider.otherwise("/post/list");
	//
	// Now set up the states
	$stateProvider.state(
		'postList', {
			url: "/post/list",
			views: {
				"content": { templateUrl: "views/post/list", controller: PostListController }
			}
		}
	)
});