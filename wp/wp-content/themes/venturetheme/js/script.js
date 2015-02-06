// JavaScript Document

$(document).ready(function(){
	
	$('.absolute-center-parent').each(function(i, obj) {
	var element_height = $(this).children('.absolute-center').outerHeight();
	var half_height = ((element_height)/2);
	$(this).css('marginTop', -half_height);
	

	//$('#carousel-press').carousel();
	
	$('#timeline .month a').on('click', function(e) {
		e.preventDefault();
		
		var urlSegments = $(this).attr('href').split('/');
		var year = urlSegments[urlSegments.length - 3]
			, month = urlSegments[urlSegments.length - 2]
		
		console.log(year + '-' + month);
		
		$.ajax ({
		    type: 'GET',
		    url: window.wpSiteUrl + '/wp-content/themes/venturetheme/archive-json.php?year=' + year + '&month=' + month,
		    data: {},
		    dataType: 'json',
		    success: function (result) {
		        console.log(result);
				$('#carousel-press .carousel-indicators').empty();
				$('#carousel-press .carousel-inner .item').remove();
				
				$.each(result, function(i, p) {
					$('#carousel-press .carousel-indicators').append('<li data-target="#carousel-press" data-slide-to="' + i + '" class="' + (0 == i ? 'active': '') + '"></li>');
					$('#carousel-press .carousel-inner').append(
						'<div class="item ' + (0 == i ? 'active': '') + '">'
						+ '<div class="overlay-press-img"></div>'
						+ '<img class="press-slide-background-image" src="' + (p.background_image ? p.background_image : window.wpSiteUrl + '/wp-content/themes/venturetheme/img/media_top_image.jpg') + '">'						
						+ '<div class="col-md-6 col-md-offset-6">'
						+ '<div class="press-slider-content-wrapper">'
						+ '<h2>' + p.short_title + '</h2>'
						+ '<p>' + p.excerpt + '</p>'
						+ '</div>'
						+ '<a class="btn btn-lg btn-default light-blue-btn" href="' + p.url + '">Read full article</a> </div>'
						+ '</div>'
					);
				});
				
				var slideHeight = $(window).height() - 60;
				slideHeight = slideHeight > 710 ? 710 : slideHeight; // limit to a max height of the slide at 710 px
				$('#slide-press .item').height(slideHeight);
				
				//$('#carousel-press').carousel();
				$('#carousel-press').carousel(0);
		    }
		});
		
		return false;
	});
	
});

if(window.location.href.indexOf("/en/") > -1) {
      $(".lang[title|='EN']").hide();
};
if(window.location.href.indexOf("/en/") === -1) {
      $(".lang[title|='JP']").hide();
};


$('#slide-press .carousel-inner .item:first').addClass('active');
$("#slide-press .carousel-indicators li:first").addClass("active");
$('#carousel-alliances .carousel-inner .item:first').addClass('active');
$("#carousel-alliances .carousel-indicators li:first").addClass("active");

$( ".post-content table" ).wrap( "<div class='table-responsive'></div>" );
$( ".post-content table" ).addClass( "table" );
$( ".post-content table" ).addClass( "table" );
if ($(".post-content").find('table').length > 0) {
       $( ".post-content" ).addClass( "table-wrapper" );
   }
   
   
   
	$('<span class="dropdown-month">▼</span>').appendTo('.calendar-archives.arw-theme1 .year');
	
	$('.dropdown-month').on('click', function(){
	var toggle = $(this).data('toggle');
	$('.calendar-archives.arw-theme1 .archives-years').css('overflow', toggle ? 'hidden' : 'visible');
	$(this).data('toggle', !toggle);
	});
	$('.calendar-archives.arw-theme1 .archives-years .year .month a').on('click', function(){
	$('.calendar-archives.arw-theme1 .archives-years').css('overflow', 'hidden');
	$('html,body').animate({
        scrollTop: $("#slide-press").offset().top},
        'slow');
	});
	
	$('.archives-years .current').addClass("selecteed");
	
//  Home Top Image Size
$('.panel').height($(window).height() - 77);
$('#top-image').height($(window).height() - 88);

var slideHeight = $(window).height() - 60;
slideHeight = slideHeight > 710 ? 710 : slideHeight;
$('#slide-press .item').height(slideHeight);


//  Video media
$('#video_1').siblings("div").hide();
$('.video_thumb_hover').hide();

$('.video-feed a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
   $("#"+target+" .video-desc").hide();  
});

$('.video-feed a').hover(function() {
   $(this).children('.video_thumb_hover').fadeToggle(100);
});

$('.video-desc').click(function(){
  $(this).hide();
  return false;
});

$("#video_1 .video-desc, a[rel='video_1']").click(function(){
    $f($('#video_1 iframe')[0]).api('play');
	$f($('#video_2 iframe')[0]).api('unload');
	$f($('#video_3 iframe')[0]).api('unload');
	$f($('#video_4 iframe')[0]).api('unload');
	$f($('#video_5 iframe')[0]).api('unload');
})

$("#video_2 .video-desc, a[rel='video_2']").click(function(){
    $f($('#video_2 iframe')[0]).api('play');
	$f($('#video_1 iframe')[0]).api('unload');
	$f($('#video_3 iframe')[0]).api('unload');
	$f($('#video_4 iframe')[0]).api('unload');
	$f($('#video_5 iframe')[0]).api('unload');
})

$("#video_3 .video-desc, a[rel='video_3']").click(function(){
    $f($('#video_3 iframe')[0]).api('play');
	$f($('#video_1 iframe')[0]).api('unload');
	$f($('#video_2 iframe')[0]).api('unload');
	$f($('#video_4 iframe')[0]).api('unload');
	$f($('#video_5 iframe')[0]).api('unload');
})

$("#video_4 .video-desc, a[rel='video_4']").click(function(){
    $f($('#video_4 iframe')[0]).api('play');
	$f($('#video_1 iframe')[0]).api('unload');
	$f($('#video_2 iframe')[0]).api('unload');
	$f($('#video_3 iframe')[0]).api('unload');
	$f($('#video_5 iframe')[0]).api('unload');
})

$("#video_5 .video-desc, a[rel='video_5']").click(function(){
    $f($('#video_5 iframe')[0]).api('play');
	$f($('#video_1 iframe')[0]).api('unload');
	$f($('#video_2 iframe')[0]).api('unload');
	$f($('#video_3 iframe')[0]).api('unload');
	$f($('#video_4 iframe')[0]).api('unload');
})

//  Tabs
$('.domestic-travel a, .investment a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
   $(this).addClass("active-tab").removeClass("tab").siblings(this).addClass("tab").removeClass("active-tab");
   return false;
});

$("a[rel='the-list']").click(function(){
  $("#the-list-map").show();
  $("#other-map").hide();
  $(".japan-map").show();
  $(".asia-map").hide();
});
$("a[rel='flocations'], a[rel='telunjuk']").click(function(){
  $("#the-list-map").hide();
  $("#other-map").show();
  $(".japan-map").hide();
  $(".asia-map").show();
});


//  PopOut Menu
$('#home-icon').click(function(){
	$('.home-menu').show();
	$('.about-menu, .recruit-menu, .media-menu').hide();
});
$('#about-icon').click(function(){
	$('.about-menu').show();
	$('.home-menu, .recruit-menu, .media-menu').hide();
});
$('#recruit-icon').click(function(){
	$('.recruit-menu').show();
	$('.about-menu, .home-menu, .media-menu').hide();
});
$('#media-icon').click(function(){
	$('.media-menu').show();
	$('.about-menu, .recruit-menu, .home-menu').hide();
});
/*
$('.popout-menu-title').click(function(){
	$(this).siblings('.is_page_menu').toggle();
});
*/
$('.menu-hover').click(function(){
	$('.popout-menu').show();
	$('.navbar-header').addClass('grey-navbar-header');
	$('.navbar-brand').addClass('navbar-brand-hover');
});
$('#skrollr-body, .sub-menu a, a.grey-logo').click(function(){
	$('.popout-menu').hide();
	$('.navbar-header').removeClass('grey-navbar-header');
	$('.navbar-brand').removeClass('navbar-brand-hover');
});



	
});

/*

var tab_mobile = function () {
	
if ($(window).width() > 768) {
	  
$(".hide-on-mobile").show();
$(".thelist-mobile").hide();
$(".flocations-mobile").hide();
$(".telunjuk-mobile").hide();

$("#the-list").appendTo(".hide-on-mobile");
$("#flocations").appendTo(".hide-on-mobile");
$("#telunjuk").appendTo(".hide-on-mobile");
$("#flocations").hide();
$("#telunjuk").hide();

}
else {
    $("a[rel='the-list']").click(function(){
		$(".thelist-mobile").show();
		$(".flocations-mobile").hide();
		$(".telunjuk-mobile").hide();
	});
	$("a[rel='flocations']").click(function(){
		$(".thelist-mobile").hide();
		$(".flocations-mobile").show();
		$(".telunjuk-mobile").hide();
	});
	$("a[rel='telunjuk']").click(function(){
		$(".thelist-mobile").hide();
		$(".flocations-mobile").hide();
		$(".telunjuk-mobile").show();
	});
	$(".hide-on-mobile").hide();
	$("#the-list").appendTo(".thelist-mobile");
	$("#flocations").appendTo(".flocations-mobile");
	$("#telunjuk").appendTo(".telunjuk-mobile");
	
	}
};
$(document).ready(tab_mobile);
$(window).resize(tab_mobile);

*/

$(document).ready(function(){
	
	$('#news .news-bloc:gt(5)').hide();
$('.load-news').click(function() {
    $('#news .news-bloc:gt(5)').fadeToggle();
	return false;
});

// $(document).on("scroll", onScroll);
//SMOOTH SCROLL
    $('.scroll-link a[href*=#]:not([href=#]), .is_page_menu a[href*=#]:not([href=#]), .video-feed a[href*=#]:not([href=#]), #video a[href*=#]:not([href=#])').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
	
/*
function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.sub-menu a').each(function () {
		$(this).parent('.sub-menu').show();
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.sub-menu a').removeClass("active");
            currLink.addClass("sub-menu-active");
        }
        else{
            currLink.removeClass("sub-menu-active");
        }
    });
}
*/

});



// GRAPH


defCanvasWidth=760;
defCanvasHeight=506;

var mydata1 = {
	labels : ["2010","2011","2012","2013","2014"],
	datasets : [
		{
			fillColor : ["rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(141,155,159,1)","rgba(177,152,37,1)"],
			highlightFill: ["rgba(141,155,159,0.5)","rgba(141,155,159,0.75)","rgba(141,155,159,0.75)","rgba(141,155,159,0.75)","rgba(177,152,37,0.75)"],
			data : [20000000,20000000,30000000,46000000,68000000],
      title : "2014",
		},
		{
			fillColor : ["rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(231,233,233,1)","rgba(242,209,59,1)"],
			highlightFill: ["rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(231,233,233,0.75)","rgba(242,209,59,1)"],
			data : [0,10000000,16000000,22000000,18000000],
      title : "2013"
		},
	]
}               

var startWithDataset =1;
var startWithData =1;

var opt2 = {
	thousandSeparator : ",",
	scaleOverride: true,
    scaleSteps: 6,
	scaleStepWidth:20000000,
    scaleStartValue: 0,
      animationStartWithDataset : startWithDataset,
      animationStartWithData : startWithData,
      animation : true,
      animationSteps : 45,
	  barValueSpacing : 45,
	  responsive:false,
	  barShowStroke : false,
	  dynamicDisplay: false,
	  annotateDisplay : false,
	  scaleShowGridLines: false,
	  scaleFontSize : 15,
	  xAxisBottom:false,
	  xAxisTop:true,
	  scaleFontColor: "#9ca7ab"
}


	