<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar (Academicos)</title>
</head>

<body>

    <h1>Sistema Escolar (Academicos)</h1>

    <form action="validar.php" method = "POST">
        <label for="user"> Matricula: </label>
        <input type="number" name = "user" value = "" required>
        <br>
        <label for="pswd"> Contraseña: </label>
        <input type="password" name = "pswd" value = "" required>
        <br>
        <button type="sumbit">Entrar</button>
    </form>
    
    <?php
    // validamos el warning
    if (!empty($_GET["error"]) && $_GET["error"] == 100) 
    {
        echo "Se ha detectado un accexo indebido";        
    }


    ?>
</body>
</html>
