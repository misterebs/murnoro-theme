;(function () {
	
	'use strict';

	// iPad and iPod detection	
	var isiPad = function(){
	  return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
	      (navigator.platform.indexOf("iPhone") != -1) || 
	      (navigator.platform.indexOf("iPod") != -1)
	    );
	};

	// Fast Click for ( Mobiles/Tablets )
	var mobileFastClick = function() {
		if ( isiPad() && isiPhone()) {
			FastClick.attach(document.body);
		}
	};

	var menuAnimate = function(o, margin, duration, mul) {
		var navLi = $('#nav > ul > li'), 
			ktemp = 0;
		navLi.each( function(k){
			var el = $(this);
			setTimeout(function() {
				el.velocity(
					{ opacity: o, marginRight: margin }, 
					{ duration: duration }
				);
			},  k * mul );
			ktemp = k;
		});
		
		console.log(ktemp);
		setTimeout(function(){
			$('.btn btn-default').velocity(
				{ opacity: o, marginRight: margin }, 
				{ duration: duration }
			);
		}, ktemp+1 * mul );
		
		
	};

	var burgerMenu = function() {
		$('body').on('click', '.nav-toggle', function(){
			$('#nav > ul > li, .btn btn-default').css({ marginRight: -50, opacity: 0 });
			$(this).toggleClass('active');
			
			var mainNav = $('#main-nav');
			mainNav.slideToggle(400).toggleClass('active');
			

			if ( mainNav.hasClass('active') ) {
				menuAnimate(1, 0, 400, 200);	
			} else {
				menuAnimate(0, -50, 1, 0);	
			}

		});
	};

	var mobileMenuState = function() {
		if ( $(window).width() > 768 ) {
			$('#main-nav').removeClass('active').show();
			$('#nav > ul > li, .btn btn-default').attr('style', '');
		} else {
			$('.nav-toggle').removeClass('active');
			$('#main-nav').hide();
		}
	};

	
var wResize = function() {
		mobileMenuState();
		imgHover();
		$(window).resize(function(){
			mobileMenuState();
			imgHover();
		});

	};
	

	

	$(function(){
		burgerMenu();
		wResize();
		viewWorks();
		mobileFastClick();
		responsiveTabs();
	});


}());
