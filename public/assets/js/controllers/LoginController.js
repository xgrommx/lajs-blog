'use strict';

function LoginController($scope, $http) {

	$scope.login = function(user) {
		$http({
			url: "login",
			method: "POST",
			data: {user: user},
			success: function(data) {

			}
		});

	}
}