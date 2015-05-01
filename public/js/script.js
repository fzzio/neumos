$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 50) {
        $('#menu-secciones').addClass('navbar-bajar');
    }
    else {
        $('#menu-secciones').removeClass('navbar-bajar');
    }
});



$(document).ready(function(){
    $('#carousel-inicio').carousel({
        interval: 2000
    })
});