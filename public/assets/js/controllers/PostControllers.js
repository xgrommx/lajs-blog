'use strict';

function PostListController($scope, $http) {
	$http.get('post/list').success(function(data) {
		$scope.posts = data;
	});
}