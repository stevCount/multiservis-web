<!doctype html>
<html lang="en">

<head>
    <?php
        include './vistas/complementos/header.html' ;
    ?>
</head>

<body>

    <div class="div-logo text-center">
        <div class="container">
            <img src="assets/img/logo.png" alt="Logo" class="img-inicio animate__animated animate__backInUp">
        </div>
    </div>

    <?php
        include './vistas/complementos/nav/navbar.html' ;
    ?>

    <div class="content">

        <section class="animate__animated animate__fadeInRight">

            <div id="carouselInicio" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselInicio" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselInicio" data-slide-to="1"></li>
                    <li data-target="#carouselInicio" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/carousel/inicio/1.jpg" class="d-block w-100" alt="1">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/inicio/2.jpg" class="d-block w-100" alt="2">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/inicio/3.jpg" class="d-block w-100" alt="3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselInicio" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselInicio" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>

        </section>
        <section class="animate__animated animate__fadeInRight mt-5 mb-4">
            <div class="text-center">
                <h2>Nuestras marcas</h2>
            </div>
            <div class="container">
                <div class="owl-carousel owl-theme" id="carousel-marcas">
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/1.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/1-2.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/2-1.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/2-2.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/3-1.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/3-2.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/4.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/5-1.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/6.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/7-1.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/7.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/8.png" alt="">
                    </div>
                    <div>
                        <img class="width-producto" height="200" src="assets/img/marcas/9.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="videos">
            <div class="container text-center">
                <iframe id="player" type="text/html" width="850" height="580"
                src="https://www.youtube.com/embed/QIBiB5UIauk?enablejsapi=1"
                frameborder="0"></iframe>
            </div>
        </section>

        <br>
        <br>

        <section id="casosexito" class="mt-5">
            <h1 class="text-center">Casos de exito</h1>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/casos/1.jpg" class="figure-img img-fluid rounded" alt="1">
                    </div>
                    <div class="col-8">
                        <p>El colegio San José quería renovar su material escolar para el nuevo curso, Multiservis.com
                            les proporcionó
                            una amplia variedad de productos, desde cuadernos, lápices hasta mochilas y estuches, con
                            diseños
                            personalizados atractivos, el colegio San José pudo ahorrar dinero además de tiempo al
                            comprar todo lo que
                            necesitaba en un solo lugar, los alumnos disfrutaron de su nuevo material.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/casos/2.jpg" class="figure-img img-fluid rounded" alt="2">
                    </div>
                    <div class="col-8">
                        <p>La artista María tenía una exposición de sus obras en una galería de arte Multiservis.com le
                            ayudó a crear
                            unos carteles, unas invitaciones originales y elegantes, con el logo de su marca y las
                            imágenes de sus
                            obras, María logró captar la atención de los visitantes, de los medios de comunicación,
                            recibió muchos
                            elogios por su trabajo y su presentación.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/casos/3.avif" class="figure-img img-fluid rounded" alt="3">
                    </div>
                    <div class="col-8">
                        <p>Cliente: <b>La Emprendedora Creativa</b></La>, es una empresa donde una talentosa diseñadora
                            de tarjetas y
                            manualidades, necesitaba un proveedor confiable para su negocio en línea; Multiservis.com no
                            solo le
                            proporcionó materiales de alta calidad, sino que también le ofreció descuentos por compras
                            al por mayor, con
                            la ayuda de Multiservis.com pudo expandir su línea de productos y ahora es una marca
                            reconocida en el mundo
                            del diseño de papelería.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/casos/4.jpeg" class="figure-img img-fluid rounded" alt="4">
                    </div>
                    <div class="col-8">
                        <p>Nombre de la empresa: <b>Eventos Elegantes</b>
                            Eventos Elegantes, una empresa de organización de eventos, confió en Multiservis.com para
                            sus necesidades de
                            papelería y decoración, la calidad y variedad de los productos de Multiservis.com les
                            permitieron ofrecer a
                            sus clientes opciones personalizadas y de alta calidad, esto se tradujo en eventos exitosos
                            y clientes
                            satisfechos, lo que llevó a recomendaciones y un aumento en los contratos.</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-4">
                        <img src="assets/img/casos/5.jpg" class="figure-img img-fluid rounded" alt="5">
                    </div>
                    <div class="col-8">
                        <p>Cliente : <b>Tienda de Moda Urbana</b>
                            StreetStyle, una tienda de moda urbana, buscaba personalizar sus prendas con diseños
                            exclusivos, así que
                            ellos se asociaron con Multiservis.com para sublimar sus camisetas, sudaderas y gorras con
                            ilustraciones
                            únicas y vibrantes, gracias a la calidad de la sublimación de Multiservis.com, las prendas
                            personalizadas de
                            StreetStyle se volvieron muy populares entre los jóvenes, llevando a un aumento
                            significativo en las ventas
                            al igual que la expansión de su tienda a nuevas ubicaciones.
                        </p>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </section>

    </div>

<?php
    include './vistas/complementos/footer.html' ;
?>

</body>

</html>