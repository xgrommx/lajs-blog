'use strict';

/**
 * NavigationController
 *
 * @author Flakron Bytyqi <flakron@gmail.com>
 *
 * @param $scope
 * @param $location
 * @constructor
 */
function NavigationController($scope, $location, UserService) {

	$scope.logout = function() {
		UserService.logout();
		$location.path('/');
	}

}