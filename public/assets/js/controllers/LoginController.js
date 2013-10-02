'use strict';

/**
 * LoginController
 *
 * @author Flakron Bytyqi <flakron@gmail.com>
 *
 * @param $scope
 * @param $http
 * @param $location
 * @constructor
 */
function LoginController($scope, $http, $location) {

	$scope.login = function(user) {
		$http({
			url: "login",
			method: "POST",
			data: {user: user}
		}).success(function(data) {
			if(data.validLogin) {
				$location.path('/admin');
			} else {

			}
		});
	}
}