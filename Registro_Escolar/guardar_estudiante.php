<?php
include_once "conexion.php";
include_once "Estudiante.php";
$estudiante = new Estudiante($_POST["nombre"], $_POST["apellido"], $_POST["direccion"], $_POST["fecha_nacimiento"], $_POST["grado"], $_POST["telefono"], $_POST["seccion"]);
$estudiante->guardar();
header("Location: mostrar_estudiantes.php");