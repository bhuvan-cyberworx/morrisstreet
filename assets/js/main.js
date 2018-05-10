$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('#main-menu').toggleClass('menu-open');
		$('#main-wrapper').toggleClass('shift-left');

	});

	$('#press-relase-button').click(function(){
		$('#press-release-wrapper').toggleClass('show-press-release');
	});
});

