// JavaScript Document

$(document).ready(function(){
	
//  Home Top Image Size
$('#home-top-image').height($(window).height());
//  Tabs
$('.domestic-travel a, .investment a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
   $(this).addClass("active-tab").removeClass("tab").siblings(this).addClass("tab").removeClass("active-tab");
   return false;
});
//  PopOut Menu
$('#home-icon').hover(function(){
	$('.home-menu').toggle();
});
$('#about-icon').hover(function(){
	$('.about-menu').toggle();
});
$('#recruit-icon').hover(function(){
	$('.recruit-menu').toggle();
});
$('#media-icon').hover(function(){
	$('.media-menu').toggle();
});

$('.popout-menu-wrapper').hover(function(){
		$(this).children('.sub-menu').toggle();});
		$('.menu-hover, .popout-menu').hover(function () {
		$('.popout-menu').toggle();
		$('.navbar-header').toggleClass('grey-navbar-header');
		$('.navbar-brand').toggleClass('navbar-brand-hover');
});
		
});	

$(document).ready(function(){
// $(document).on("scroll", onScroll);
//SMOOTH SCROLL
    $('.sub-menu a[href*=#]:not([href=#])').on('click', function (e) {
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
	  annotateDisplay : true,
	  scaleShowGridLines: false,
	  scaleFontSize : 15,
	  xAxisBottom:false,
	  xAxisTop:true,
	  scaleFontColor: "#9ca7ab",
	  
}


	