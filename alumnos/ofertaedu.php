<?php

include_once ("./inc/sesiones.php");

validarSesion();

include_once ("./inc/header.php");
include_once ("./inc/consultas.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta Educativa</title>
</head>
<body>
    <?php
        encabezado();
        menu();
        
    ?>
    <h1>Oferta Educativa</h1>

    <?php 

       // print_r (mysqli_fetch_assoc(mostrarCarreras()));
        //exit();

        $resultado = mostrarCarreras();

        while ($row = mysqli_fetch_assoc($resultado)) {
            // Accede a los valores de cada fila utilizando los nombres de las columnas
            echo $row["nombre"] . "<br>";
        }
        
    
    ?>

</body>
</html>