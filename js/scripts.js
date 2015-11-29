jQuery(document).ready(function ($) {

	jQuery.fn.exists = function(){return this.length>0;}



/* --- GLOBAL --- */


	jQuery.fn.exists = function(){return this.length>0;}

	/* MENU SETTINGS */

	window.menuHeight;
	window.mobileMode = false;
	window.currentMenu;
	window.subMenuHeight = 0;
	window.slideOffset = -150;

	getMenuHeight();
	getSubMenuHeight();
	setSlideOffset();

	destination = $('.dest');
	destinationUp = $('.destup');

	mywindow = $(window);
    htmlbody = $('html,body');

	var navOffset = (menuHeight + subMenuHeight);
	var navOffsetUp = (navOffset * -1);
	var subLinksNav = $('.sub-navigation').find('li');
	var links = $('.slide-link');


	/* AUTO SCROLL */

	destination.waypoint(function (event, direction) {

        dataslide = $(this).attr('page-slide');
        if (direction === 'down') {
            $('.sub-navigation li[page-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
		}

    }, { offset: navOffset });

	destinationUp.waypoint(function (event, direction) {

        dataslide = $(this).attr('page-slide');

        if (direction === 'up') {
            $('.sub-navigation li[page-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    }, { offset: navOffsetUp });


    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.sub-navigation li[page-slide="2"]').removeClass('active');
        }

		var bannerHeight = $('#home-down-arrow').height();
		if (mywindow.scrollTop() > bannerHeight) {
            $('#logo-container').addClass('clover');
        }
		else {
			$('#logo-container').removeClass('clover');
		}
    });

	function goToByScroll(dataslide) {
		var dataOffset = ($('.dest[page-slide="' + dataslide + '"]').offset().top);
		var scrollHeight = dataOffset - menuHeight - subMenuHeight;
		htmlbody.stop().animate({scrollTop: scrollHeight}, 500, 'easeInOutQuint');
    }

	subLinksNav.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('page-slide');
        goToByScroll(dataslide);
    });

	links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('page-slide');
        goToByScroll(dataslide);
    });


	//MAIN NAV ONSCROLL ACTIVATION

	$(window).scroll(function() {

		var scroll = $(window).scrollTop();
		var engageHeight = $('#home-hero').height();

		if (scroll >= engageHeight - 75) {
			$("#nav-main").addClass("active");
		} else {
			$("#nav-main").removeClass("active");
		}

	});


	//LOGO SWAP

	var lastScrollTop = 0;
	$(window).scroll(function(event){
	   var st = $(this).scrollTop();
	   if (st > lastScrollTop){
		   // downscroll code
		   $('.logo-container').addClass('active');
	   } else {
		  // upscroll code
		   $('.logo-container').removeClass('active');
	   }
	   lastScrollTop = st;
	});


	//MOBILE NAV

	$('#mobile-button').on('click', function() {
		var menu = $('#mobile-navigation');
		if (menu.hasClass('active')) { menu.removeClass('active'); }
		else { menu.addClass('active'); }
	});


	// BACK TO TOP

	jQuery('.top-button').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 1000, 'easeInOutQuint');
        return false;
    })


	// GENERIC FADE IN

	function fade() {
		$('.fadein').each(function() {

			var objectBottom = $(this).offset().top + $(this).outerHeight();
			var windowBottom = $(window).scrollTop() + $(window).innerHeight();

			if (objectBottom < windowBottom) {
				$(this).addClass('fadeleft');
			}

			/* if (objectBottom > windowBottom) {
				$(this).removeClass('fadeleft');
			}*/
		});
	}

	fade();
	$(window).scroll(function() {fade();});


	// GENERIC FADE up

	function fadeUp() {
		$('.fadeinup').each(function() {

			var objectBottom = $(this).offset().top + $(this).outerHeight() - $(this).height() / 3;
			var windowBottom = $(window).scrollTop() + $(window).innerHeight();

			if (objectBottom < windowBottom) {
				$(this).addClass('fadeup');
			}

			/* if (objectBottom > windowBottom) {
				$(this).removeClass('fadeleft');
			}*/
		});
	}

	fadeUp();
	$(window).scroll(function() {fadeUp();});


	// ANCHOR LINK OFFSET

	function scroll_if_anchor(href) {
		href = typeof(href) == "string" ? href : $(this).attr("href");

		if(!href) return;

		var fromTop = 130;

		var $target = $(href);

		if($target.length) {
			$(window).load(function() {
				$('html, body').animate({ scrollTop: $target.offset().top - fromTop });
				if(history && "pushState" in history) {
					history.pushState({}, document.title, window.location.pathname + href);
					return false;
				}
			});
		}
	}


	scroll_if_anchor(window.location.hash);

	$("body").on("click", "a[href^='#']", scroll_if_anchor);


	// PRODUCT HOVERS

	$(".white-overlay").on({
		mouseenter: function () {
			$(this).next('a.item-bar').addClass('active');
		},
		mouseleave: function () {
			$(this).next('a.item-bar').removeClass('active');
		}
	});
	$(".item-bar").on({
		mouseenter: function () {
			$(this).prev('a.white-overlay').addClass('active');
		},
		mouseleave: function () {
			$(this).prev('a.white-overlay').removeClass('active');
		}
	});


	/* RESIZE */

	$(window).resize(function() {
		getMenuHeight();
		getSubMenuHeight();
		setSlideOffset();
	});

	$(window).load(function() {
		getMenuHeight();
		getSubMenuHeight();
		setSlideOffset();
	});




/* --- HOME PAGE --- */


	// ARTICLE HOVERS

	$(".white-overlay").on({
		mouseenter: function () {
			$(this).next('a.post-bar').addClass('active');
		},
		mouseleave: function () {
			$(this).next('a.post-bar').removeClass('active');
		}
	});
	$(".post-bar").on({
		mouseenter: function () {
			$(this).prev('a.white-overlay').addClass('active');
		},
		mouseleave: function () {
			$(this).prev('a.white-overlay').removeClass('active');
		}
	});


/* --- SHOP PAGE --- */


	//SHOP PAGE FILTER BUTTON

	$('#filter-btn').on('click', function() {
		var shopFilter = $('#filter-items');
		if (shopFilter.hasClass('active')) { shopFilter.removeClass('active'); }
		else { shopFilter.addClass('active'); }
	});

	$('#filter-btn').on('click', function() {
		var filterButton = $(this);
		if (filterButton.hasClass('active')) { filterButton.removeClass('active'); }
		else { filterButton.addClass('active'); }
	});


/* --- THE CAUSE PAGE --- */


});// END ON READY SECTION


//MOBILE NAV

var lastScrollTop = 0, delta = 5;
$(window).scroll(function(){
	var nowScrollTop = $(this).scrollTop();

	if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
		if (nowScrollTop > lastScrollTop) {
			$('#mobile-navigation').addClass('fadeout');
		} else {
			$('#mobile-navigation').removeClass('fadeout');
		}
	lastScrollTop = nowScrollTop;
}
});


/* STELLAR */

$(window).load(function() {

	function refreshStellar() {
		if ($(window).width() >= 1024) {
			$(window).stellar({
				verticalScrolling: true,
				horizontalScrolling: false
			});
			if ($(window).data('plugin_stellar') != undefined) {
				$(window).data('plugin_stellar').destroy();
				$(window).data('plugin_stellar').init();
			}
		}
		else {
			if ($(window).data('plugin_stellar') != undefined) {
				$(window).data('plugin_stellar').destroy();
				$('.stellar-bg').css('background-attachment','scroll');
			}
		}
	}

	$(window).resize(function() {
		refreshStellar();
	});

	refreshStellar();

});


$(window).load(function() {

	$("#overlay").delay(150).fadeOut('600');

});


function getMenuHeight() {
	if (getMobileMode()) {
		currentMenu = (mobileMode ? $('#nav-mobile') : $('#nav-main'));
		menuHeight = currentMenu.height();
	}
}
function getSubMenuHeight() {
    if (getMobileMode()) {
		if (mobileMode) {
			subMenuHeight = 0;
		}
		else {
			subMenuHeight = $('#nav-sub').height();
		}
	}
}
function setSlideOffset() {
	if ($('.first-slide').exists()) {
		window.slideOffset = $('.first-slide').height() - 150;
	}
	return true;
}
function getMobileMode() {
	var navMain = $('#nav-main');
	mobileMode = (navMain.is(':visible') ? false : true);
	return true;
}


/*
$(window).load(function() {

	$( function() {

		$('.products-grid').isotope({
			itemSelector: '.item',
				masonry: {
				  columnWidth: '.grid-sizer',
			}
	});

});
*/


/* -------- HOME PAGE ------- */
    	
jQuery(document).ready(function($) {

    /* HERO */

    $(window).resize(function() {
      resizeHero();
    });
    $(window).load(function() {
      resizeHero();
    });


    /* ISOTOPE */

    $('#products-grid').isotope({
      itemSelector: '.item',
      masonry: {
        columnWidth: '.grid-sizer',
      }
    });


    $('#articles-grid').isotope({
      itemSelector: '.post',
      masonry: {
        columnWidth: '.post-sizer',
      }
    });


    /* HOME SLIDER */

    $('#home-hero-slider').bxSlider({
      touchEnabled: true,
      mode: 'fade',
      pagerCustom: '#home-hero .bx-pager-custom',
      nextSelector: $('#home-hero .bx-next-control'),
      prevSelector: $('#home-hero .bx-prev-control'),
      nextText: '',
      prevText: '',
      auto:true,
      speed: 500,
      pause: 6000,
    });

});


function resizeHero() {

    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    var aboutHeight = $('#home-about').height();

    if (windowHeight < 400) {
      windowHeight = 400;
    }
    sliderHeight = windowHeight;

    $('#home-hero-slider li, #home-hero .bx-viewport, #home-hero-slider').css({ height: sliderHeight });
    $('#home-about-left').css({ height: aboutHeight });
    $('#home-about-right').css({ height: aboutHeight });
    $('#item-bar').css({ height: aboutHeight });
    $('.home-about-grid').css({ height: aboutHeight });

    // SLIDER POSITION

    var sliderControl = $('#home-hero .bx-pager-custom');
    var sliderCount = sliderControl.find('.bx-pager-item').length;
    var sliderItemHeight = 65;
    var sliderOffset = 4;

    if (sliderCount > 0) {
      var controlHeight = sliderCount * sliderItemHeight - sliderItemHeight;
      var controlPadding = (sliderHeight / 2) - (controlHeight / 2) - sliderOffset;
      sliderControl.css('padding-top',controlPadding+'px');

    }

    //$('.item-bar').width($('.item-bar').parent().width() - 18 );

}


/* -------- SHOP PAGE ------- */

jQuery(document).ready(function($) {

    /* SHOP SLIDER */

    $('#shop-slider').bxSlider({
      touchEnabled: true,
      mode: 'fade',
      pagerCustom: '#shop-hero .bx-pager-custom',
      nextSelector: $('#shop-hero .bx-next-control'),
      prevSelector: $('#shop-hero .bx-prev-control'),
      nextText: '',
      prevText: '',
      auto: true,
      speed: 500,
      pause: 7000,
    });
  
});


/* -------- ABOUT PAGE ------- */

jQuery(document).ready(function($) {
  
    /* ISOTOPE */

    $('#team-grid').isotope({
      itemSelector: '.item',
      masonry: {
        columnWidth: '.grid-sizer',
      }
    });
  
});

/* -------- THE CAUSE PAGE ------- */

jQuery(document).ready(function($) {

  /* RESIZE CALLS */

  resizeSection();

  $(window).resize(function() {
    resizeSection();
  });
  $(window).load(function() {
    resizeSection();
  });


  /* SIGN SLIDER */

  $('#sign-slider').bxSlider({
    touchEnabled: true,
    mode: 'fade',
    pagerCustom: '#cause-signs .bx-pager-custom',
    nextSelector: $('#cause-signs .bx-next-control'),
    prevSelector: $('#cause-signs .bx-prev-control'),
    nextText: '',
    prevText: '',
    auto:true,
    speed: 500,
    pause: 6000,
  });

});

function resizeSection() {

  var windowHeight = $(window).height() - 130;
  var windowWidth = $(window).width();

  if (windowHeight < 480) {
    windowHeight = 480;
  }

  $('.fullscreen').css({ height: windowHeight });

} 


/* -------- PRODUCT PAGE ------- */

jQuery(document).ready(function($) {


  /* PRODUCT SLIDER */

  $('#product-slider').bxSlider({
    touchEnabled: true,
    mode: 'fade',
    pagerCustom: '#product-info .bx-pager-custom',
    nextSelector: $('#product-info .bx-next-control'),
    prevSelector: $('#product-info .bx-prev-control'),
    nextText: '',
    prevText: '',
    auto: true,
    speed: 500,
    pause: 3000,
  });

});


// SLIDER HEIGHT

function resizeProductHero() {

  var windowHeight = $(window).height() - $('#nav-main').height();

  if (windowHeight < 400) {
    windowHeight = 400;
  }
  sliderHeight = windowHeight;

  $('#product-slider li, #product-info .bx-viewport, .product-left, .product-right, #product-slider').css({ height: sliderHeight });

}

resizeProductHero();

$( window ).resize(function() {
  resizeProductHero(); 
});


/* -------- LOGIN PAGE ------- */

jQuery(document).ready(function($) {

    /* LOGIN SLIDER */

    $('#login-slider').bxSlider({
      touchEnabled: false,
      mode: 'fade',
      pagerCustom: '#login-main .bx-pager-custom',
      nextSelector: $('#login-main .bx-next-control'),
      prevSelector: $('#login-main .bx-prev-control'),
      nextText: '',
      prevText: '',
      auto: true,
      speed: 1000,
      easing: 'ease',
      pause: 5000,
    });

});


/* -------- GIVE PAGE ------- */

jQuery(document).ready(function($) {

  $('#give-slider').bxSlider({
    touchEnabled: false,
    mode: 'fade',
    pager: false,
    controls: false,
    auto: true,
    speed: 1000,
    easing: 'ease',
    pause: 5000,
  });
  
});
	 
