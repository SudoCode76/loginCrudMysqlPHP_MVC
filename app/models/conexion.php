<?php
$server = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "login";

$conexion = new mysqli($server, $usuario, $contrasenia, $base_de_datos);

if ($conexion->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    exit();
}

$conexion->set_charset("utf8");

?>