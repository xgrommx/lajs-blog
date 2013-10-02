'use strict';


blog.factory("UserService", function($http) {
	var userService = {};

	userService.logout = function() {
		return $http.get('logout');
	}

	return userService;
});