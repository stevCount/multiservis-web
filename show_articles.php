<?php
    include_once('conexion.php');

    $sql = "SELECT * FROM shopping_cart where address = '{$ipaddress}'";

    $resultado = $conexion->query($sql);

    $resultset = array();
    while ($row = $resultado->fetch_assoc()) {
      $resultset[] = $row;
    }

    $totalpagos = 0;

    foreach (array_chunk($resultset, 3) as $chunk) {
        echo '<div class="row">';
        foreach ($chunk as $plan) {
            $urlimage = $plan['url_img'];
            $precio = $plan['price'];
            $idcart = $plan['id'];
            echo '<div class="col-4">';
            echo "<div class='card' style='width: 18rem;'>
                    <img class='card-img-top' src='{$urlimage}' alt='Card image cap' weight=200 height=200>
                    <div class='card-body'>
                        <h5 class='card-title'>Precio</h5>
                        <p class='card-text'>{$precio}</p>
                        <button class='btn btn-danger' onclick='deleteCart({$idcart})'><i class='fa-solid fa-trash'></i></button>
                    </div>
                </div>";
            echo '</div>';
            $totalpagos = $totalpagos + $precio;
        }
        echo '</div>';
        echo "<br>";
    }

    $conexion->close();

    ?>