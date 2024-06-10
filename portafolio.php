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
            <img class="width-producto" src="assets/img/logo.png" alt="Logo" class="img-inicio">
        </div>
    </div>

    <?php
        include './vistas/complementos/nav/navbar.html';
    ?>

    <?php
        include './repetir_portafolio.php';
    ?>

    <?php
        include './vistas/complementos/footer.html';
    ?>


</body>

</html>