(function ($) {

	$(function () {
		'use strict';
		// Document Begin
		$(document).ready(function(){

			/////////////////////////////////////////////////////////////////////////////////
			// Header Functions
			/////////////////////////////////////////////////////////////////////////////////


			// Header on scroll changes class
			$(window).scroll(function() {
			  var scroll = $(window).scrollTop();
			  if (scroll >= 100) {
			     $(".site-header").addClass("scroll-header");
					 $(".mobile-menu .menu").addClass("scroll-menu");
			  } else {
					$(".site-header").removeClass("scroll-header");
			    $(".mobile-menu .menu").removeClass("scroll-menu");
			  }
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Share Functions
			/////////////////////////////////////////////////////////////////////////////////
			$('.social-share').click(function(e) {
					e.preventDefault();
					window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
					return false;
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Sliders
			/////////////////////////////////////////////////////////////////////////////////

			$('.slider-gallery').slick({
			  infinite: false,
				autoplay: true,
			  autoplaySpeed: 5000,
				slidesToShow:4,
				arrows:true,
				dots:false,
				responsive: [
			    {
			      breakpoint: 992,
			      settings: {
							slidesToShow: 3,
							slidesToScroll: 3
			      }
			    },
					{
			      breakpoint: 768,
			      settings: {
							slidesToShow: 2,
							slidesToScroll: 2
			      }
			    },
					{
			      breakpoint: 576,
			      settings: {
							slidesToShow: 1,
							slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});


		// Document End
		});
	});
})(this);
