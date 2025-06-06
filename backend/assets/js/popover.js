jQuery(function(e){
	'use strict';
	var popover = new bootstrap.Popover(document.querySelector('.example'), {
		container: 'body'
	})
	
	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-primary"]'), {
	  template: '<div class="popover popover-head-primary x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-secondary"]'), {
	 template: '<div class="popover popover-head-secondary x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-success"]'), {
		template: '<div class="popover popover-head-success x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="head-info"]'), {
		template: '<div class="popover popover-head-info x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})
   
	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="primary"]'), {
	  template: '<div class="popover popover-primary x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="secondary"]'), {
	  template: '<div class="popover popover-secondary x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="success"]'), {
		template: '<div class="popover popover-success x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})

	var popover = new bootstrap.Popover(document.querySelector('[data-bs-popover-color="info"]'), {
		template: '<div class="popover popover-info x-placement" role="tooltip"><div class="popover-arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
	})
	
	$(document).on('click', function(e) {
		$('[data-bs-toggle="popover"],[data-bs-original-title]').each(function() {
			if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
				(($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false // fix for BS 3.3.6
			}
		});
	});
});