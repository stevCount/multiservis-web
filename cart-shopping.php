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
            <img src="assets/img/logo.png" alt="Logo" class="img-inicio">
        </div>
    </div>

    <?php
        include './vistas/complementos/nav/navbar.html';
    ?>
    
    <div class="content">
        <section id="marco">
            <div class="container fluid">
                <h1 class="text-center mb-4 titulo-parrafos mt-5">Articulos en el carrito <i class="fa-solid fa-cart-shopping"></i> </h1>
            </div>

            <div class="container fluid">
                <?php
                    include_once('show_articles.php');
                ?>
            </div>

            <div class="container fluid">
                <div class="row mt-5">
                    <div class="col">
                        <p>Total a pagar: $ <?php echo $totalpagos; ?></p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <button class="btn btn-primary">Realizar Pago</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
        include './vistas/complementos/footer.html';
    ?>
</body>

</html>