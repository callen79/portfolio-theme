import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();


//Custom Scripts below

/* Preload Home Hero images */
function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
		$('<img/>')[0].src = this;
	});
}
	
if ($('body').hasClass('page-template-front') && $(window).width() > 800) {
	preload([
		'http://www.chrisallendesign.com/wp-content/themes/portfolio3.2/dist/assets/images/banners/chris-allen-design-banner-small.jpg',
		'http://www.chrisallendesign.com/wp-content/themes/portfolio3.2/dist/assets/images/banners/chris-allen-design-banner-medium.jpg',
		'http://www.chrisallendesign.com/wp-content/themes/portfolio3.2/dist/assets/images/banners/chris-allen-design-banner.jpg',
		'http://www.chrisallendesign.com/wp-content/themes/portfolio3.2/dist/assets/images/banners/chris-allen-design-banner-xlarge.jpg'
	]);
	console.log('Images loaded!');
}
else {
	console.log('Images NOT loaded!');
}

/* Scroll Animations */
function fadeOnScroll(a, b, c) {
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		a.css({'opacity':(( b - scroll )/c)+.04});
	});
};

function featureImageParralax(a, b) {
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		a.css({'top':(b - scroll)});
	});
};

function featureSupportImageParralax(a) {
	var featuredTop = a.scrollTop();

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();		
		a.css({'top':(featuredTop - scroll)});
	});
};


if (!Foundation.MediaQuery.atLeast('medium')) {
	fadeOnScroll($('#hero-title'), 200, 250);
	fadeOnScroll($('#hero-sub-info'), 300, 350);

} else {
	fadeOnScroll($('.logo'));
}

featureImageParralax($('#featured-1'), 1, 600);

featureImageParralax($('#featured-2'), .01, 300);


// Search Toggle Animations
function writePlaceHolder() {
	var txt = "Looking for something, Chief?";
	var timeOut;
	var txtLen = txt.length;
	var char = 0;

	if ($(window).width() < 960) {
	     txt = "Searching for...";
	     txtLen = txt.length;
	  } else {}

	$('#input-search').attr('placeholder', '|');
	(function typeIt() {
		var humanize = Math.round(Math.random() * (200 - 30)) + 10;
		timeOut = setTimeout(function () {
			char++;
			var type = txt.substring(0, char);
			$('#input-search').attr('placeholder', type + '|');
			typeIt();
	
			if (char == txtLen) {
				$('#input-search').attr('placeholder', $('#searchform input').attr('placeholder').slice(0, -1)) // remove the '|'
				clearTimeout(timeOut);
			}
	
		}, humanize);
	}());
}

//Toggle search animation

/* animation helper  */
function queue(start) {
    var rest = [].splice.call(arguments, 1),
        promise = $.Deferred();

    if (start) {
        $.when(start()).then(function () {
            queue.apply(window, rest);
        });
    } else {
        promise.resolve();
    }
    return promise;
}
var buttonsOff = false;

$('#input-search').attr('placeholder','');

$('#search-toggle').click(function(e) {
  $("#search-container").fadeToggle(350);

  $("#searchform").toggleClass("move-left");  
  
  if (!buttonsOff) {
	  queue(function () {
			return $("#menu-main-1 li:nth-child(2) a").animate({opacity: "0"}, 120);
		},  function () {
			return $("#menu-main-1 li:nth-child(1) a").animate({opacity: "0"}, 120);
		});
		setTimeout(writePlaceHolder, 1000);
		
		buttonsOff = true;
  } else {

    queue(function () {
		return $("#menu-main-1 li:nth-child(1) a").animate({opacity: "100"}, 200);
	}, function () {
		return $("#menu-main-1 li:nth-child(2) a").animate({opacity: "100"}, 200);
	},  function () {
		return $('#input-search').attr('placeholder','');
	});

	buttonsOff = false;
  }
   
});


//Sticky Header
$(window).scroll(function() {
	if ($(this).scrollTop() >= 400){  
    	$('#masthead-sticky .top-bar').addClass("sticky");
	} else {
	    $('#masthead-sticky .top-bar').removeClass("sticky");
	}
});

$( window ).resize(function() {
	if (buttonsOff) {
		$( "#search-toggle" ).trigger( "click" );
	}
	if( $(window).width() < 800) {
	  $("input#search-mobile").attr('placeholder','Looking for...');
	} else {
		$("input#search-mobile").attr('placeholder','Looking for something, chief?');
	}
	if( $(window).width() > 1024 && $(".overlay").hasClass("open")) {
	  $( ".button_container" ).trigger( "click" );
	}
});

$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
});


// Search Toggle Animations
var searchOn = false;
var mailOn = false;

$('#search-toggle-mobile').click(function() {
	if (!searchOn) {
		$('#overlay').addClass('search').removeClass('contact');
		searchOn = true;
		mailOn = false;
	} else {
		$('#overlay').removeClass('search').removeClass('contact');
		searchOn = false;
	}
});

$('.view-more a').click(function() {
	$("html, body").animate({ scrollTop: $('#featured').offset().top }, 1000);
});

// Home page Animations - ScrollMagic
var controller = new ScrollMagic.Controller();

// CASE STUDY 1

// tweens
var ipad1 = TweenMax.fromTo("#post-238 .ipad", 1,
{left: -1000,
 alpha:0},
{left: -300, 
 ease: Circ.easeInOut,
 alpha:1}
);

var caseStudyTitle1 = TweenMax.fromTo("#post-238 h3", 1,
{left: 100,
 alpha:0},
{left: 0, 
 ease: Circ.easeInOut,
 alpha:1}
);

var caseStudyOneMeta = TweenMax.fromTo("#post-238 div.post-meta", 1,
{left: 140,
 alpha:0},
{left: 0, 
 ease: Circ.easeInOut,
 alpha:1}
);

var caseStudyText1 = TweenMax.fromTo("#post-238 p", 1,
{left: 140,
 alpha:0},
{left: 0, 
 ease: Circ.easeInOut,
 alpha:1}
);

var caseStudyButton1 = TweenMax.fromTo("#post-238 a.button", 1,
{top: -80,
 alpha:0},
{top: 0, 
 ease: Circ.easeInOut,
 alpha:1}
);

// scenes
var scene = new ScrollMagic.Scene({triggerElement: "#featured h2", duration: 300, offset: -50})
.setTween(ipad1)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);

var scene2 = new ScrollMagic.Scene({triggerElement: "#featured h2", duration: 300, offset: -50})
.setTween(caseStudyTitle1)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);

var scene3 = new ScrollMagic.Scene({triggerElement: "#featured h2", duration: 250, offset: 30})
.setTween(caseStudyOneMeta)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);

var scene4 = new ScrollMagic.Scene({triggerElement: "#post-238", duration: 230, offset: 80})
.setTween(caseStudyText1)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);

var scene5 = new ScrollMagic.Scene({triggerElement: "#post-238", duration: 230, offset: 150})
.setTween(caseStudyButton1)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);


// CASE STUDY 2

// Tweens
var ipad2 = TweenMax.fromTo("#post-39 .ipad", 1,
{left: 1000,
 alpha:0},
{left: 50, 
 ease: Circ.easeInOut,
 alpha:1}
);

var caseStudyTitle2 = TweenMax.fromTo("#post-39 h3", 1,
{left: -100,
 alpha:0},
{left: 0, 
 ease: Circ.easeInOut,
 alpha:1}
);

// Scenes
var scene6 = new ScrollMagic.Scene({triggerElement: "#post-39", duration: 300, offset: -100})
.setTween(ipad2)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);

var scene7 = new ScrollMagic.Scene({triggerElement: "#post-39", duration: 300, offset: -50})
.setTween(caseStudyTitle2)
.addIndicators({name: "loop"}) // add indicators (requires plugin)
.addTo(controller);
