/*****************************************
* Admin script
/****************************************/

(function($) {


	var exportMenus = function() {

		var $exportBtn = $('#smux-export');

		var data = {
			action: 'smux_export_menus',
			security: smux_obj.nonce
		};

		$exportBtn.click(function() {
			$.post(ajaxurl, data)
				.done(function(res) {
					alert('Exported successfully.');
				})
				.fail(function() {
					alert('There was an issue, please try again.');
			});
		});

	};


	$(document).ready(function() {
		exportMenus();
	});


})(jQuery);
