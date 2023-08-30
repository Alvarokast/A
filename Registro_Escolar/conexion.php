<?php
$host = "localhost";
$user = "root";
$contraseña = "";
$base_de_datos = "escuela";
$mysqli = new mysqli($host, $user, $contraseña, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}