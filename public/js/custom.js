// JavaScript Document
$(document).ready(function(){ 
	
	fullSize(); //fullSize() Function initialize
	//tool tip jquery
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})	
/*------------calculate height from one div and assign to another div---------*/
	/*--------------owlCarousel---------------*/
	$('#banner-slider').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		// animateOut: 'slideOutDown',
  //       animateIn: 'flipInX',
		dots:true,
		autoplay:true,
		items:1,  
		mouseDrag:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		], 
	});
	$('.testMonials').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		// animateOut: 'slideOutDown',
  //       animateIn: 'flipInX',
		dots:true,
		autoplay:true,
		items:1,  
		mouseDrag:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		], 
	});
	$('#artistSlider').owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		// animateOut: 'slideOutDown',
  //       animateIn: 'flipInX',
		dots:false,
		autoplay:true,  
		mouseDrag:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		], 
		responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            768: {
                items: 5
            },
            1200: {
                items: 6	
            }
        }
	});
	var owl = $('#partnerSlider');
		owl.owlCarousel({
		    loop:true,
		    nav:false,
		    margin:0,
		    dots:true,
		    autoplay:false,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },            
		        960:{
		            items:5
		        },
		        1200:{
		            items:6
		        }
		    }
		});
		$('#clientSay,#AdvertisingBlock').owlCarousel({
	        //center: true,
                autoplay:true,
                smartSpeed: 1000,
	        items: 1,
	        loop: true,
	        dots:true,
	        nav: false,
	        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	        responsive: {
	            0: {
	                items: 1
	            },
	            480: {
	                items: 1
	            },
	            768: {
	                items: 1
	            },
	            1200: {
	                items: 1
	            }
	        }
	    });

	/*--------------fullHeight---------*/
	function fullSize() {
		var heights = window.innerHeight;
		jQuery(".fullHt").css('min-height', (heights + 0) + "px");
		if(window.innerWidth < 1024){
			jQuery(".fullHt").css("min-height", "100%");
			} 
	}
	/*-----------sticky header---------*/
	var banner_Ht = window.innerHeight - $('header').innerHeight();	
		$(window).scroll(function(){
		  var sticky = $('body'),
			  scroll = $(window).scrollTop();
		
		  if (scroll >= 300) sticky.addClass('sticky-header');
		  else sticky.removeClass('sticky-header');
	});
	//for open menubar
	$('.sideNavToggle').on('click',function(){$('body').toggleClass('menuOpened');});
	$('.closeSidenav').on('click',function(){$('body').removeClass('menuOpened');});
	
});