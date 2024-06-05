<!doctype html>
<html lang="en">

<head>
    <?php
        include './vistas/complementos/header.html';
    ?>
</head>

<body>

    <div class="div-logo text-center">
        <div class="container">
            <img src="assets/img/logo.png" alt="Logo" class="img-inicio animate__animated animate__backInUp">
        </div>
    </div>

    
    <?php
        include './vistas/complementos/nav/navbar.html';
    ?>

    <section id="publicidad" class="mb-5">
        <div class="container">
            <h1 class="text-center display 3 mt-5">Piezas Publicitarias</h1>
            <br>
            <div id="carouselPublicidad" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselPublicidad" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselPublicidad" data-slide-to="1"></li>
                    <li data-target="#carouselPublicidad" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img height="800" src="assets/img/anuncios/cara_1_brochure.jpg" class="d-block w-100" alt="1">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/cara_2_brochure.jpg" class="d-block w-100" alt="2">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/cara_1_tarjeta.jpg" class="d-block w-100" alt="3">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/cara_2_tarjeta.jpg" class="d-block w-100" alt="3">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/carta_de_invitacion.jpg" class="d-block w-100" alt="3">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/poster.jpg" class="d-block w-100" alt="3">
                    </div>
                    <div class="carousel-item">
                        <img height="800" src="assets/img/anuncios/volante.jpg" class="d-block w-100" alt="3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselPublicidad" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselPublicidad" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>

    <?php
        include './vistas/complementos/footer.html';
    ?>
</body>

</html>