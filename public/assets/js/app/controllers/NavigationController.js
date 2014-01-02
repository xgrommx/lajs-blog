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
function NavigationController($scope, $location, UserService, ModalService) {

	$scope.login = function() {
		ModalService.dialog('views/user/login');
	}

	$scope.logout = function() {
		UserService.logout();
		$location.path('/');
	}

}