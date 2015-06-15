function setMargenTopHeader(){
	$(".titular-seccion").css("margin-top", $("header").height() );
}

$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 50) {
        $('#menu-secciones').addClass('navbar-bajar');
    	setMargenTopHeader();
    }
    else {
        $('#menu-secciones').removeClass('navbar-bajar');
        setMargenTopHeader();
    }
});



$(document).ready(function(){
    $('.carousel .carousel-inner .item:first').addClass('active');
    
    $('#carousel-inicio').carousel({
        interval: 2000
    })
    setMargenTopHeader();
});

$(window).on('resize', function(){
	setMargenTopHeader();
});