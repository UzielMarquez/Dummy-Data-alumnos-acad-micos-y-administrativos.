<?php

include ("./inc/sesiones.php");

validarSesion();

include ("./inc/header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1> <?= $_SESSION["Nombre"]; ?>

    <?= menu()?>

    <a href="logout.php">Log out</a>
</body>
</html>