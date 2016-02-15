$(document).ready(function($) {

	$('#btnDestination').click(function(e) {
		e.preventDefault();

		$navDestination = $('#navDestination');
		if(!$navDestination.hasClass('active')) {
			$navDestination.addClass('active');
		}
		else {
			$navDestination.removeClass('active');
		}
	});

	$('#navDestination').mouseout(function(e) {
		e.preventDefault();
	    $('#navDestination').hide();
	});

	$('main').click(function(e) {
		e.preventDefault();
	    $('#navDestination').hide();
	});
});
