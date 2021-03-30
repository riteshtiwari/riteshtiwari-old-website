$(document).ready(function(){
  $('.projectSlider').bxSlider({
 auto: false,
  mode: 'fade',
  pause: 5000,
  speed: 800
  });
});

$(document).ready(function(){
  $('.testimonialSlider').bxSlider({
 auto: true,
  mode: 'fade',
  pause: 5000,
  speed: 800
  });
});

$(document).ready(function(){

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	

	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});






$(document).ready(function(){
	var tt =1;
  $(".boxliimg").click(function(){
	  if(tt==1){
    	$('.tab-1').addClass("showcont");
		$('.tab-6').removeClass("showcont");
		tt=2;
	  }
	  else if(tt==2){
    	$('.tab-2').addClass("showcont");
		$('.tab-1').removeClass("showcont");
		tt=3;
	  }
	  else if(tt==3){
    	$('.tab-3').addClass("showcont");
		$('.tab-2').removeClass("showcont");
		tt=4;
	  }
	  
	 else if(tt==4){
    $('.tab-4').addClass("showcont");
	$('.tab-3').removeClass("showcont");
	tt=5;
	  }
	  
	else if(tt==5){
    $('.tab-5').addClass("showcont");
	$('.tab-4').removeClass("showcont");
	tt=6;
	  }
	 else{
    $('.tab-6').addClass("showcont");
	$('.tab-5').removeClass("showcont");
	tt=1;
	  }
	
	  });
});






$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 800);
	        return false;
	      }
	    }
	  });
	});

