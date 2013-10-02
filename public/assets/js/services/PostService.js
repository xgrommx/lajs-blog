'use strict';

blog.factory("PostService", function($http) {
	var postService = {};

	postService.last = function(count) {
		return $http.get('post/list/' + count);
	};

	return postService;
});