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

function insertCart(urlimage, element = null) {
    var imgurlalternative = '';
    $(element).children().each(function() {
        console.log(typeof($(this).attr('src')) !== 'undefined');
        if ( typeof($(this).attr('src')) !== 'undefined' ){
            imgurlalternative = $(this).attr('src');
        }
    });

    const data = {
        urlimage: element != null ? imgurlalternative : urlimage,
    };

    $.ajax({
        type: 'POST',
        url: 'insertar_articulo.php',
        data: JSON.stringify(data),
        contentType: 'application/json',
    }).done((data) => {
        if(data==1){
            alertify.success('Articulo agregado correctamente');
        }else{
            alertify.error(data);
        }
    }).fail((err) => {
        console.error(err);
    });
}

function deleteCart(idcart) {

    alertify.confirm('Confirmacion','¿Desea eliminar este articulo del carro de compras?',
    function(){
        const data = {
            idcart: idcart,
        };
    
        $.ajax({
            type: 'POST',
            url: 'delete_articulo.php',
            data: JSON.stringify(data),
            contentType: 'application/json',
        }).done((data) => {
            if(data==1){
                alertify.success('Articulo eliminado correctamente');
                setTimeout(function(){
                    window.location.reload(1);
                 }, 2000);
            }else{
                alertify.error(data);
            }
        }).fail((err) => {
            console.error(err);
        });
    },
    function(){
        console.log('Cancel');
    });
}