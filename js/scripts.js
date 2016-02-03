$(document).ready(function() {
    $('.loader').remove();
    $('#mainbody').removeClass('hide');
    //initialization
    $('.scrollspy').scrollSpy();
    $('.slider').slider({full_width: true, indicators: false});
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
});