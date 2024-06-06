<?php

// $servidor   = 'localhost';
// $usuario    = 'id21488773_multiservisuser';
// $contrasena = 'Aa123456$';
// $bd = 'id21488773_multiservisweb';

$servidor   = '172.28.44.74';
$usuario    = 'remote';
$contrasena = 'remote';
$bd = 'multiservisweb';
$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);
if ($conexion->connect_error) {
    die('Hubo un fallo en la conexión ' . $conexion->connect_error);
};

$ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
else
    $ipaddress = 'UNKNOWN';

?>