// JavaScript Document

$(document).ready(function(){
	
//  Home Top Image Size
$('#home-top-image').height($(window).height());
$('.plane').height($(window).height());
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
	