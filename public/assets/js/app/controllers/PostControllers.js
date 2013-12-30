'use strict';

function PostListController($scope, PostService) {
	PostService.last(5).success(function(data) {
		$scope.posts = data;
	});
}