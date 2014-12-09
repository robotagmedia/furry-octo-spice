// JavaScript Document

$(document).ready(function(){
	
	//  Homepage size
    $('#home-top-image').height($(window).height());
	
$('.domestic-travel a, .investment a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
   $(this).addClass("active-tab").removeClass("tab").siblings(this).addClass("tab").removeClass("active-tab");
   return false;
});
	

	
});