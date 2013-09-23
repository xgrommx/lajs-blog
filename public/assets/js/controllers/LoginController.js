'use strict';

function LoginController($scope, $http, $location) {

	$scope.login = function(user) {
		$http({
			url: "login",
			method: "POST",
			data: {user: user},
		}).success(function(data) {
			if(data) {
				$location.path('/admin');
			}
		});
	}
}