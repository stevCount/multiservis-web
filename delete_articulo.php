<?php

include_once('conexion.php');

$data = json_decode(file_get_contents('php://input'), true);
$idcart = $data['idcart'];

$sql = "DELETE FROM shopping_cart WHERE id = {$idcart}";

if ($conexion->query($sql) === TRUE) {
    echo 1;
} else {
    echo $conexion->error;
}

$conexion->close();