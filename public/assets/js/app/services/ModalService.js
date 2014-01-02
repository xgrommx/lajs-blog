'use strict';

blog.factory('ModalService', function($ekathuwa) {

	var modalService = {};

	modalService.dialog = function(viewUrl) {
		$ekathuwa.modal({
			id: "modalId",
			footer: false,
			header: false,
			bodyTemplateURL: viewUrl
		});
	}

	return modalService;

})