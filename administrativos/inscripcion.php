<?php

include_once("./inc/sesiones.php");

validarSesion();

include_once("./inc/header.php");

include_once("./inc/consultas.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
</head>

<body>


    <?php

    echo "<h1>Inscripcion</h1>
    
          <h2> $_SESSION[expediente] $_SESSION[Nombre]</h2>";

    menu();
    ?>

    <br>


    <?php

    $consulta = "SELECT IDAlumno FROM carreras_alumnos WHERE IDAlumno = $_SESSION[expediente];";

    $resultado = buscarAlumno($consulta);

    $row = mysqli_fetch_assoc($resultado);

    if (empty($row["IDAlumno"])) {

    ?>
        Carrera:

        <form action="./inscribir.php" method="post">

            <select name="carrera">';


                <?php
                $resultado = mostrarCarreras();


                while ($row = mysqli_fetch_assoc($resultado)) {

                    echo "<option value = '$row[IDCarrera]' > $row[nombre] </option> \n";
                }

                ?>

                <input type="submit" value="Inscribirme">



            </select>

        </form>


    <?php
    } else {

        echo "Este expediente ya está registrado en una carrera";
    }
    ?>
</body>

</html>