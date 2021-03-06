jQuery(document).ready(function($){
	$('#myCarousel').carousel({
		interval: 5000
	});

	$('#carousel-text').html($('#slide-content-0').html());

	//Handles the carousel thumbnails
	$('[id^=carousel-selector-]').click( function(){
		var id = this.id.substr(this.id.lastIndexOf("-") + 1);
		id = parseInt(id);
		$('#myCarousel').carousel(id);
	});


	// When the carousel slides, auto update the text
	$('#myCarousel').on('slid.bs.carousel', function (e) {
		var id = $('.item.active').data('slide-number');
		$('#carousel-text').html($('#slide-content-'+id).html());
	});







	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MqL = 1170;
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile - open lateral menu clicking on the menu icon
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		if( $('.cd-main-content').hasClass('nav-is-visible') ) {
			closeNav();
			$('.cd-overlay').removeClass('is-visible');
		} else {
			$(this).addClass('nav-is-visible');
			$('.cd-main-header').addClass('nav-is-visible');
			$('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
			toggleSearch('close');
			$('.cd-overlay').addClass('is-visible');
		}
	});



	//open search form
	$('.cd-header-buttons').on('click', function(event){
		event.preventDefault();
		toggleSearch();
		closeNav();
	});


	// Kenedy 12/8/2016 for adding navbar-fixed-top
	var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var scroll_start = 0;
	var startchange = $('.heder-bottom');
	var offset = startchange.offset();
	if (startchange.length){
	$(document).scroll(function() {
	  scroll_start = $(this).scrollTop();
	  if(scroll_start >= offset.top) {
		  $('.heder-bottom').addClass('navbar-fixed-top');
		  if(w >500){
		  	$('.heder-bottom').css('height','70px');
			$('.cd-search').css("top","100%");
		  }
		  else{
			  $('.heder-bottom').css('height','32vw');
			  $('.cd-header-buttons').css('top','15px');
			  $('.cd-search').css("top","100%");
		  }
	   }
	   else {
		  $('.heder-bottom').removeClass('navbar-fixed-top');
		  if(w>500){
			  $('.cd-search').css("top","17%");
		  }
		  else{
			  $('.cd-header-buttons').css('top','80px');
			  $('.cd-search').css("top","50vw");
	      }
	   }
	});
	}

	//mobile cart and hamburger icon positioning
	if(w<500){
		$('.header-right2').insertAfter(".nav_2");
		$('.header-right2').addClass("col-xs-6 col-sm-6");
		$('.nav_2').addClass("col-xs-6 col-sm-6");
		$('.navbar-collapse').addClass("col-xs-12 col-sm-12");
		$('.navbar-collapse').insertAfter(".heder-bottom .container");
	}


	//submenu items - go back link
	$('.go-back').on('click', function(){
		$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
	});

	function closeNav() {
		$('.cd-nav-trigger').removeClass('nav-is-visible');
		$('.cd-main-header').removeClass('nav-is-visible');
		$('.cd-primary-nav').removeClass('nav-is-visible');
		$('.has-children ul').addClass('is-hidden');
		$('.has-children a').removeClass('selected');
		$('.moves-out').removeClass('moves-out');
		$('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$('body').removeClass('overflow-hidden');
		});
	}

	function toggleSearch(type) {
		if(type=="close") {
			//close serach
			$('.cd-search').removeClass('is-visible');
			$('.cd-search-trigger').removeClass('search-is-visible');
			$('.cd-overlay').removeClass('search-is-visible');
		} else {
			//toggle search visibility
			$('.cd-search').toggleClass('is-visible');
			$('.cd-search-trigger').toggleClass('search-is-visible');
			$('.cd-overlay').toggleClass('search-is-visible');
			if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
			($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
		}
	}

	function checkWindowWidth() {
		//check window width (scrollbar included)
		var e = window,
			a = 'inner';
		if (!('innerWidth' in window )) {
			a = 'client';
			e = document.documentElement || document.body;
		}
		if ( e[ a+'Width' ] >= MqL ) {
			return true;
		} else {
			return false;
		}
	}

	function moveNavigation(){
		var navigation = $('.cd-nav');
		var desktop = checkWindowWidth();
		if ( desktop ) {
			navigation.detach();
			navigation.insertBefore('.cd-header-buttons');
		} else {
			navigation.detach();
			navigation.insertAfter('.cd-main-content');
		}
	}

	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	} , false);
	function hideURLbar(){
		window.scrollTo(0,1);
	}

});
