(function ($) {
	
	"use strict";

	// Nav bar fixed
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		var box = $('.header-text').height();
		var header = $('header').height();

		if (scroll >= box - header) {
			$("header").addClass("background-header");
			$("header").removeClass("background-header--hide");
		} 
		else if (scroll > header){
			$("header").removeClass("background-header");
			$("header").addClass("background-header--hide")
		}
		else {
			$("header").removeClass("background-header--hide")
		}
	});
	
	$('.input-group.date').datepicker({format: "dd.mm.yyyy"});
	

	$('.filters ul li').click(function(){
	  $('.filters ul li').removeClass('active');
	  $(this).addClass('active');
	  
	  var data = $(this).attr('data-filter');
	  $grid.isotope({
	    filter: data
	  })
	});

	var $grid = $(".grid").isotope({
	  itemSelector: ".all",
	  percentPosition: true,
	  masonry: {
	    columnWidth: ".all"
	  }
	})

	// Main page slider
	$(".Modern-Slider").slick({
	    autoplay:true,
	    autoplaySpeed:7000,
	    speed:500,
	    slidesToShow:1,
	    slidesToScroll:1,
	    pauseOnHover:true,
	    dots:true,
	    pauseOnDotsHover:true,
	    cssEase:'linear',
	   // fade:true,
	    draggable:false,
	    prevArrow:'<button class="PrevArrow"></button>',
	    nextArrow:'<button class="NextArrow"></button>', 
	  });

	$('.search-icon a').on("click", function(event) {
	    event.preventDefault();
	    $("#search").addClass("open");
	    $('#search > form > input[type="search"]').focus();
	  });

	  $("#search, #search button.close").on("click keyup", function(event) {
	    if (
	      event.target == this ||
	      event.target.className == "close" ||
	      event.keyCode == 27
	    ) {
	      $(this).removeClass("open");
	    }
	  });

	  $("#search-box").submit(function(event) {
	    event.preventDefault();
	    return false;
	  });


	$(function() {
        $("#tabs").tabs();
    });

	// Custom owl carousel 
	// $('.owl-menu-item').owlCarousel({
	// 	items:1,
	// 	loop:false,
	// 	dots: true,
	// 	nav: true,
	// 	autoplay: true,
	// 	margin:20,
	// 	responsive:{
	// 		  0:{
	// 			  items:1
	// 		  },
	// 		  600:{
	// 			  items:1
	// 		  },
	// 		  1000:{
	// 			  items:1
	// 		  }
	// 	  }
	// })

	var el = $('.owl-menu-item');
	var carousel;
	var carouselOptions = {
		loop:true,
		nav: true,
		autoplay: true,
		margin: 30,
		dots: true,
		slideBy: 'page',
		responsive: {
			0: {
				items: 1,
				rows: 2 //custom option not used by Owl Carousel, but used by the algorithm below
			},
			500: {
				items: 2,
				rows: 3 //custom option not used by Owl Carousel, but used by the algorithm below
			},
			1000: {
				items: 5,
				rows: 2 //custom option not used by Owl Carousel, but used by the algorithm below
			}
		}
	};

	// Taken from Owl Carousel so we calculate width the same way
	var viewport = function() {
		var width;
		if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
		width = $(carouselOptions.responsiveBaseElement).width();
		} else if (window.innerWidth) {
		width = window.innerWidth;
		} else if (document.documentElement && document.documentElement.clientWidth) {
		width = document.documentElement.clientWidth;
		} else {
		console.warn('Can not detect viewport width.');
		}
		return width;
	};

	var severalRows = false;
	var orderedBreakpoints = [];
	for (var breakpoint in carouselOptions.responsive) {
		if (carouselOptions.responsive[breakpoint].rows > 1) {
		severalRows = true;
		}
		orderedBreakpoints.push(parseInt(breakpoint));
	}
	
	//Custom logic is active if carousel is set up to have more than one row for some given window width
	if (severalRows) {
		orderedBreakpoints.sort(function (a, b) {
		return b - a;
		});
		var slides = el.find('[data-slide-index]');
		var slidesNb = slides.length;
		if (slidesNb > 0) {
		var rowsNb;
		var previousRowsNb = undefined;
		var colsNb;
		var previousColsNb = undefined;

		//Calculates number of rows and cols based on current window width
		var updateRowsColsNb = function () {
			var width =  viewport();
			for (var i = 0; i < orderedBreakpoints.length; i++) {
			var breakpoint = orderedBreakpoints[i];
			if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
				var breakpointSettings = carouselOptions.responsive['' + breakpoint];
				rowsNb = breakpointSettings.rows;
				colsNb = breakpointSettings.items;
				break;
			}
			}
		};

		var updateCarousel = function () {
			updateRowsColsNb();

			//Carousel is recalculated if and only if a change in number of columns/rows is requested
			if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
			var reInit = false;
			if (carousel) {
				//Destroy existing carousel if any, and set html markup back to its initial state
				carousel.trigger('destroy.owl.carousel');
				carousel = undefined;
				slides = el.find('[data-slide-index]').detach().appendTo(el);
				el.find('.fake-col-wrapper').remove();
				reInit = true;
			}


			//This is the only real 'smart' part of the algorithm

			//First calculate the number of needed columns for the whole carousel
			var perPage = rowsNb * colsNb;
			var pageIndex = Math.floor(slidesNb / perPage);
			var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));

			//Then populate with needed html markup
			var count = 0;
			for (var i = 0; i < fakeColsNb; i++) {
				//For each column, create a new wrapper div
				var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
				for (var j = 0; j < rowsNb; j++) {
				//For each row in said column, calculate which slide should be present
				var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
				if (index < slidesNb) {
					//If said slide exists, move it under wrapper div
					slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
				}
				count++;
				}
			}
			//end of 'smart' part

			previousRowsNb = rowsNb;
			previousColsNb = colsNb;

			if (reInit) {
				//re-init carousel with new markup
				carousel = el.owlCarousel(carouselOptions);
			}
			}
		};

		//Trigger possible update when window size changes
		$(window).on('resize', updateCarousel);

		//We need to execute the algorithm once before first init in any case
		updateCarousel();
		}
	}

	//init
	carousel = el.owlCarousel(carouselOptions);  

	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('.scroll-to-section a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
			
			$('.scroll-to-section a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
		  
			var target = this.hash,
			menu = target;
			var target = $(this.hash);
			$('html, body').stop().animate({
				scrollTop: (target.offset().top) - 79
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
	        
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}


	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 767) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}


})(window.jQuery);