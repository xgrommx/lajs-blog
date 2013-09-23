'use strict';

var blog = angular.module('blog', ['ui.router']);

blog.config(function($stateProvider, $urlRouterProvider) {
	//
	// For any unmatched url
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
	).state(
		'login', {
			url: '/login',
			views: {
				"content": {
					templateUrl: "views/user/login", controller: LoginController
				}
			}
		}
	).state(
		'admin', {
			url: '/navigation/sidebar-admin',
			views: {
				"side-navigation": {
					templateUrl: "views/navigation/sidebar-admin"
				}
			}
		}
	)
});