$(document).ready(function() {
    $('.loader').remove();
    $('#mainbody').removeClass('hide');
    //initialization
    $('.scrollspy').scrollSpy();
    $('.slider').slider({full_width: true, indicators: false});
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('.modal-trigger').leanModal();
   
});

$(function()
{
	
	$('marquee').mouseover(function() {$(this).attr('scrollamount',0);})
	.mouseout(function() {$(this).attr('scrollamount',3);});
});