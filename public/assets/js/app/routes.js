'use strict';

blog.config(function($stateProvider, $urlRouterProvider) {
	//
	// For any unmatched url
	$urlRouterProvider.otherwise("/post/list");
	//
	// Now set up the states
	$stateProvider.state(
		'home', {
			abstract: true,
			views: {
				"side-navigation": { templateUrl: "views/navigation/sidebar-admin" },
				"top-nav" : { templateUrl: "views/navigation/top" }
			}
		}
	).state(
		'postList', {
			url: "/post/list",
			views: {
				"content": { templateUrl: "views/post/list" },
				"top-nav" : { templateUrl: "views/navigation/top" }
			}
		}
	).state(
		'admin', {
			url: '/admin',
			views: {
				"side-navigation": { templateUrl: "views/navigation/sidebar-admin" },
				"top-nav" : { templateUrl: "views/navigation/top-admin" }
			}
		}
	);
});