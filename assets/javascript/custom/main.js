$(document).ready(function() {
	var stickyNavTop = $('nav.main-navigation').offset().top;
	 
	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
	      
	if (scrollTop > stickyNavTop) { 
	    $('nav.main-navigation').addClass('sticky');
	} else {
	    $('nav.main-navigation').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
	    stickyNav();
	});
});