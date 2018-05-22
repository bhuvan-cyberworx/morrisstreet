function backButtonFunction(){
  alert("working");
  if(window.pageYOffset > 10){
    $('#back-button"').css('left','5%');
  }
  else{
    $('#back-button"').css('left','47.5%');
  }
}

window.addEventListener('scroll', function(){
  alert("working");
});

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
    $('#main-wrapper').css('overflow','scroll');
		document.getElementById('main-blocks').style.zIndex = 49;
    	console.log($(this).data("segment"));
        changeSegment($(this).data("segment"));
      

        
    });

    $(".back-button").click(function() {
      $('#main-wrapper').css('overflow','hidden');
    	$(".segment").removeClass("active-segment");
    	$(".main-blocks").removeClass("active-intro");
    	setTimeout(function(){
    		document.getElementById('main-blocks').style.zIndex = 51;
    	},1600),
        $("#main-wrapper").removeClass("active-site-content")

    });

    function changeSegment(t) {
    	console.log(".segment#" + t);
       $(".main-blocks").addClass("active-intro"), 
       $("#main-wrapper").addClass("active-site-content"), 
       $(".segment").removeClass("active-segment"), 
       $(".segment#" + t).addClass("active-segment")
      
    }

    
});

$('#main-wrapper').scroll(function(){
  $('#back-button').css('left','5%');
  if($('#main-wrapper').offsetTop > 10){
    $('#back-button').css('left','5%');
  }
  else{
    console.log($('#main-wrapper').offsetTop);
    $('#back-button').css('left','88%');
  }
});

