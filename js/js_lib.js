//Navigation Script
$(function() {  
	var pull = $('#pull');  
	menu = $('nav ul');  
	menuHeight = menu.height();  
		  
	$(pull).on('click', function(e) {  
		e.preventDefault();  
		menu.slideToggle();
	});  
});

	$(window).resize(function(){  
	var w = $(window).width();  
	
	if(w > 320 && menu.is(':hidden')) {  
		menu.removeAttr('style');  
	}  
});

//Smooth Scroll 

$(function() {
	var $root = $('html, body');
		
	$('a').click(function() {
    var href = $.attr(this, 'href');
    	
    $root.animate({
    scrollTop: $(href).offset().top - 80
    }, 800, function () {
    window.location.hash = href;
    });
    
    return false;
	});
});

//skills load effect

$(window).on("scroll", function() {
  var scrollPosition = scrollY || pageYOffset;

  if (scrollPosition > $("#skills-wrap").offset().top - 80 - $(window).height()) { 
  	$('#css, #html-graph').css('width', '95%');
  	$('#wordpress').css('width', '85%');
  	$('#sass').css('width', '75%');
  	$('#responsive-w').css('width', '85%');
  	$('#javascript').css('width', '45%');
  	$('#jquery, #php').css('width', '35%');
  	$('.graph p').css('opacity', '1');
  }

});



