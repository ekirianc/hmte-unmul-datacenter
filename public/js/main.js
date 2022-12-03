(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  	});

	/*hover effect only in materi page*/
	$('.page').find('.card').addClass('ui-box topBottom-leftRightCorner border p-0');
	$('.card').find('.card-body').addClass('ui-border-element');



})(jQuery);
