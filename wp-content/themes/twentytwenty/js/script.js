/*jshint jquery:true */

$(document).ready(function($) {
	// "use strict";
	
	/*jshint -W018 */

	/*-------------------------------------------------*/
	/* =  portfolio isotope
	/*-------------------------------------------------*/

	var winDow = $(window);
		// Needed variables
		var $container=$('.iso-call');
		var $filter=$('.filter');

		try{
			$container.imagesLoaded( function(){
				$container.trigger('resize');
				$container.isotope({
					filter:'*',
					layoutMode:'masonry',
					animationOptions:{
						duration:750,
						easing:'linear'
					}
				});

				setTimeout(Resize, 1500);
			});
		} catch(err) {
		}

		winDow.on('resize', function(){
			// var selector = $filter.find('a.active').attr('data-filter');

			// try {
			// 	$container.isotope({ 
			// 		filter	: selector,
			// 		animationOptions: {
			// 			duration: 750,
			// 			easing	: 'linear',
			// 			queue	: false,
			// 		}
			// 	});
			// } catch(err) {
			// }
			return false;
		});

});

function Resize() {
	$(window).trigger('resize');
}
	
/* ---------------------------------------------------------------------- */
/*	works carousel
/* ---------------------------------------------------------------------- */

// $(window).on('load', function() {
// 	var winDowHeight = $(window).outerHeight(),
// 		headerHeight = $('header .navbar').outerHeight(),
// 		footerHeight = $('footer').outerHeight();
// 	var photoHeight = parseInt(winDowHeight, 10) - parseInt(headerHeight, 10) - parseInt(footerHeight, 10);
// 	$('.carousel-photo .photo-post').height(photoHeight);
// 	$('.gal-style-section .photo-post').height(winDowHeight);
// });
// $(window).on('resize', function() {
// 	var winDowHeight = $(window).outerHeight(),
// 		headerHeight = $('header .navbar').outerHeight(),
// 		footerHeight = $('footer').outerHeight();
// 	var photoHeight = parseInt(winDowHeight, 10) - parseInt(headerHeight, 10) - parseInt(footerHeight, 10);
// 	$('.carousel-photo .photo-post').height(photoHeight);
// 	$('.gal-style-section .photo-post').height(winDowHeight);
// });
