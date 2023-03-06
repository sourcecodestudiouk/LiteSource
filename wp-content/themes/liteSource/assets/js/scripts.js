(function ($, root, undefined) {

	$(function () {
		'use strict';
		// Document Begin
		$(document).ready(function(){

			/////////////////////////////////////////////////////////////////////////////////
			// Header Functions
			/////////////////////////////////////////////////////////////////////////////////

			$( ".off-canvas-menu-trigger, .close-off-canvas" ).click(function() {
				$(".off-canvas-menu").toggleClass('show');
				$( "body").toggleClass("scroll-lock", 1);
			});

			$('.off-canvas-menu .search-toggle').click(function() {
				$('.search-form').toggleClass('show');
				$('.search-close .search-container').toggleClass('show');
				$('.close-off-canvas').toggle();
				$('.off-canvas-menu .search-toggle').toggleClass('input-showing');
				$('.off-canvas-menu .search-toggle .label, .off-canvas-menu .search-toggle .fa-search, .off-canvas-menu .search-toggle .fa-xmark').toggle();
			});

			$('.testslider').slick({
				arrows: true,
				prevArrow: '.slider-button-prev',
				nextArrow: '.slider-button-next',
				slidesToShow: 4,
				slidesToScroll: 1,
				centerMode: true,
				centerPadding:0,
				responsive: [
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1,
					  variableWidth: false,
					  centerMode: false
					}
				  }
				]
			  });
			  

			/////////////////////////////////////////////////////////////////////////////////
			// Mobile Menu
			/////////////////////////////////////////////////////////////////////////////////

			$('.menu-item-has-children').each(function(){
				$(this).append('<i class="fa-solid fa-chevron-down"></i>');
			});

			$('.menu-item-has-children i').click(function(){
				$(this).siblings('.sub-menu').slideToggle();
				$(this).toggleClass('open');
			});

			var subbg = $('.off-canvas-menu .logo-container').css( "border-color" );
			$('.menu-item-has-children .sub-menu').css('background-color', subbg);
			$('.menu > li').css('border-color', subbg);

			
			var txtcol = $('.off-canvas-menu-content .footer .btn').css( "color" );
			$('.menu-item-has-children .sub-menu li a, .menu-item-has-children .sub-menu li i').css('color', txtcol);

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
			// Automatic Spacing
			/////////////////////////////////////////////////////////////////////////////////
			if(!$('.page-header-block').length && !$('.hero-header-block').length ){
				$("main").css('padding-top', '190px');
			}

			
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
})(jQuery, this);
