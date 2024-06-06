<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Multiservis</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/libs/leaflet/leaflet.css" />
    <script src="assets/libs/leaflet/leaflet.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl.theme.default.min.css">

    <script src="assets/jquery.min.js"></script>
    <script src="assets/owl.carousel.min.js"></script>

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

    <div class="content">

        <section class="contactanos">
            <div class="container">
                <h1 class="mt-5">Contáctanos</h1>
                <ul class="list-group">
                    <li class="list-group-item">Razón social : MultiServis.Com </li>
                    <li class="list-group-item list-group-item-warning">Ubicación : Carrera 8 No. 189-08 Norte de Bogotá
                    </li>
                    <li class="list-group-item">Celular / WhatsApp: 300 850 2733</li>
                    <li class="list-group-item">Correo electrónico: papeleria.co@hotmail.com</li>
                </ul>
            </div>
        </section>

        <section class="mapa">
            <div class="container">
                <div id="mapaSitio" class="mb-5"></div>
                <br>
                <br>
                <br>
                <div class="card mb-5">
                    <img src="assets/img/foto_inicio.jpg" class="card-img-top" alt="Lugar">
                </div>
            </div>
        </section>

    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fa fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/subliart.co/"
                    role="button"><i class="fa fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://wa.me/573008502733?text=Hola%20Deseo%20obtener%20mas%20informacion" role="button"><i
                        class="fa fa-whatsapp"></i></a>
            </section>
            <section class="mb-4">
                <p>
                    Soluciones al instante
                </p>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                MultiServis.com
                            </h6>
                            <p>
                                La microempresa Multiservis.com se dedica a la venta de materiales escolares, papelería,
                                detalles, accesorios, sublimación, impresiones, realizar manualidades, entre otras
                                grandes variedades de productos y servicios , también que se caracteriza por brindar
                                "soluciones al instante", su lema de "siempre decir SI", además brindan un excelente
                                servicio al cliente y distribución de sus productos.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contáctanos</h6>
                            <p><i class="fas fa-home me-3"></i> Colombia, Bogota D.C, Carrera 8 Nro 189 - 08 Norte</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                papeleria.co@hotmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 57 300 850 2733</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="#">Multiservis.com</a>
        </div>
    </footer>

    <a class="whats-app" href="https://wa.me/573008502733?text=Hola%20Deseo%20obtener%20mas%20informacion"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    
    <div class="up-icon" id="volver-arriba" data-toggle="tooltip" data-placement="top" title="Volver arriba">
        <i class="fa fa-arrow-up my-float"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
    <script src="assets/js/contactanos/mapas/mapas.js"></script>
    <script src="https://kit.fontawesome.com/feaca44802.js" crossorigin="anonymous"></script>


</body>

</html>