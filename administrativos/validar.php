
<?php
    

    if (empty($_POST)){
        header("Location:index.php?error=200");
    }


    include ("./inc/config.php");
    include ("./inc/consultas.php");

    $expediente = $_POST["user"];

    $contrasena = $_POST["pswd"];

    if(!empty($expediente || $contrasena)){
            $query = "SELECT nombres, apellido1, apellido2, expediente FROM administrativos WHERE expediente = $expediente AND contrasena = "  . "MD5(" . "'" . $contrasena . "'" . ");";

    //$connection = mysqli_connect($HOST, $USER, $PSWD, $NAMEBD) or die("No me conecté");
          $connection = conectar();
$resultado = mysqli_query($connection, $query) or die("No me conecté");


            $resultado = mysqli_query(conectar(), $query) or die("No me conecté");

            $fila = mysqli_fetch_assoc($resultado);

    //la flechita del php es para acceder a los metodos de las cosas (seria como el "." en JAVA)
    // . es para concatenar en PHP 
    //hay q interpolar (` `)

    if($resultado ->num_rows == 1 ){
        session_start();

        $_SESSION["validada"] = 1;

        $_SESSION["Nombre"] = $fila["nombres"] . " " . $fila["apellido1"] . " " . $fila["apellido2"];

        $_SESSION["expediente"] = $fila["expediente"];

        header("Location:menu.php");

    }else{
        header("Location:index.php?error=100");
    
    }


    mysqli_close($connection);
    
    }else{
        header("Location:index.php?error=200");
    }