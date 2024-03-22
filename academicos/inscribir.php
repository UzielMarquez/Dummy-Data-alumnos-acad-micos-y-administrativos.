<?php

include("./inc/consultas.php");

session_start();

print_r($_POST);

print_r($_SESSION);

$consulta = "INSERT INTO carreras_alumnos (IDCarrera, IDAlumno) VALUES ( $_POST[carrera], $_SESSION[expediente])";

echo $consulta;

inscribirAlumno($consulta);

header("Location: menu.php");

?>