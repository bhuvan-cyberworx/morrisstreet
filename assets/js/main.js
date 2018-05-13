$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('#main-menu').toggleClass('menu-open');		
		$('#main-wrapper').toggleClass('shift-left');
		$('#overlay-box').toggleClass('overlay-box-active');

	});

	$('#press-relase-button').click(function(){
		$('#press-release-wrapper').toggleClass('show-press-release');
	});

	$(".main-box").click(function() {
		document.getElementById('main-blocks').style.zIndex = 49;
    	console.log($(this).data("segment"));
        changeSegment($(this).data("segment"));
        
    });

    $(".logo-box").click(function() {
    	$(".segment").removeClass("active-segment");
    	$(".main-blocks").removeClass("active-intro");
    	setTimeout(function(){
    		document.getElementById('main-blocks').style.zIndex = 51;
    	},1600)

    });

    function changeSegment(t) {
    	console.log(".segment#" + t);
       $(".main-blocks").addClass("active-intro"), 
       $(".segment").removeClass("active-segment"), 
       $(".segment#" + t).addClass("active-segment")
    }
});

