<?php

    function encabezado(){
        echo "<h1>Bienvenido</h1>
            <h2>$_SESSION[Nombre]</h2>";
    }

    function menu(){
        echo "
        <table>
        <tr>
        <th><a href = ofertaedu.php>Oferta Educativa</a></th>
        <th><a href = inscripcion.php>Inscribirme</a></th>
        <th>materias</th>
        <th>cursos</th>
        <th>kardex</th>
        <th>calificaciones</th>
        <th>idiomas</th>
        <th>adeudos</th>
        </tr>
        </table>";
    }




?>