<?php

include_once('conexion.php');

$data = json_decode(file_get_contents('php://input'), true);
$url_image = $data['urlimage'];
$price = $data['price'];
$name = $data['name'];

$sql = "INSERT INTO shopping_cart (url_img,address,price,name) VALUES('".$url_image."','".$ipaddress."',".$price.",'".$name."');";

if ($conexion->query($sql) === TRUE) {
    echo 1;
} else {
    echo $conexion->error;
}

$conexion->close();