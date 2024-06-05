$(document).ready(function () {
    $('#carouselCalendario').carousel({
        interval: false,
    });
    
    $('.carousel').carousel({
        interval: 2000
    });

    var owl = $('#carousel-marcas');

    owl.owlCarousel({
        autoplay: true,
        center: true,
        loop: true,
        nav: true,
    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var carouselProductos = $('.productos-carousel');
    carouselProductos.owlCarousel({
        autoplay: false,
        center: true,
        loop: true,
        nav: true,
    });
    
    $('#volver-arriba').click(function () { 
        window.scrollTo(0, 0);
    });
});

var mediaqueryList = window.matchMedia("(max-width: 600px)");

if (mediaqueryList) {
    window.onscroll = function () { myFunction() };
}

function myFunction() {
    return;
    var navbar = document.getElementById("navbar-principal");
    var sticky = navbar.offsetTop;

    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky-top")
        navbar.classList.add("bg-important")
    } else {
        navbar.classList.remove("sticky-top");
        navbar.classList.remove("bg-important")
    }
}