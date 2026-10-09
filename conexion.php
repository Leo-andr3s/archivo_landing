<?php
$host = "localhost";
$user = "root";
$password = "root"; // MAMP en macOS utiliza "root" como contraseña por defecto
$database = "bd_landing";
$port = 8889; // Puerto por defecto de MySQL en MAMP

$conexion = new mysqli($host, $user, $password, $database, $port);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>