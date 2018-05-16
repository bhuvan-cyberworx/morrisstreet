$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		$('#main-menu').toggleClass('menu-open');		
		$('#main-wrapper').toggleClass('shift-left');
		$('#overlay-box').toggleClass('overlay-box-active');
    $('#nav-icon3').toggleClass('nav-icon3-open');

	});

	$('#press-relase-button').click(function(){
		$('#press-release-wrapper').toggleClass('show-press-release');
	});

	$(".main-box").click(function() {
		document.getElementById('main-blocks').style.zIndex = 49;
    	console.log($(this).data("segment"));
        changeSegment($(this).data("segment"));
        
    });

    $(".back-button").click(function() {
    	$(".segment").removeClass("active-segment");
    	$(".main-blocks").removeClass("active-intro");
    	setTimeout(function(){
    		document.getElementById('main-blocks').style.zIndex = 51;
    	},1600),
        $("#site-content").removeClass("active-site-content")

    });

    function changeSegment(t) {
    	console.log(".segment#" + t);
       $(".main-blocks").addClass("active-intro"), 
       $("#site-content").addClass("active-site-content"), 
       $(".segment").removeClass("active-segment"), 
       $(".segment#" + t).addClass("active-segment")
      
    }
});

