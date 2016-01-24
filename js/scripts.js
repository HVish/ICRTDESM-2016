$(document).ready(function() {
    $('.loader').remove();
    $('#mainbody').removeClass('hide');
    $('.scrollspy').scrollSpy();
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    $('.collapsible').collapsible();
});