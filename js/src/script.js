$(document).ready(function($) {
	var angle = 45;
	var duration = 200;

	$( ".bounce" ).mouseover(function() {var angle = Math.floor((Math.random() * 70) + 10);$(this).transition({ rotate: angle,  duration: duration });}).mouseleave(function() {$(this).transition({ rotate: 0,  duration: duration });});

	$( ".logo-contact" ).mouseover(function() {
		$(this).transition({ perspective: '100px',rotateY: '180deg'});
		}).mouseleave(function() {
			$(this).transition({ perspective: '100px',rotateY: '0deg'});
		});

	$( "#logo-img" ).mouseover(function() {
		$(this).transition({ perspective: '100px',rotateY: '180deg'});
		}).mouseleave(function() {
			$(this).transition({ perspective: '100px',rotateY: '0deg'});
		});

	$( "#pull" ).click(function() {
		  $("#mobile_menu").fadeToggle("slow");
	});

}); 
//comment test  
	$(function () {

		var filterList = {

			init: function () {

				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});

			},

			hoverEffect: function () {

				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -40}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
					}
				);

			}

		};

		// Run the show!
		filterList.init();

	});


;( function( $ ) {

	$( '.swipebox' ).swipebox();

} )( jQuery );