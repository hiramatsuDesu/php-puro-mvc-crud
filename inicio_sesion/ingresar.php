<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
<heaer>
        <a href="index.php">
            <input type="button" value="Inicio"><br>
        </a>
</heaer>

<div>
    <h3>Inicie sesion</h3>
    <form action="inicio_session.php" method="POST">
        <label>Ingrese Usuario</label><br>
        <input type="text" name="usuario" maxlength="6"><br>

        <label>Ingrese Clave</label><br>
        <input type="password" name="clave" maxlength="6"><br>

        <label>Resuelva el captcha</label><br>
        <img src="captcha_01.php"><br>

        <input type="tex" name="cod_captcha"><br>

        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        if(isset($_GET['no'])){
            echo "<p>No se pudo validar correctamente al usuario</p>";
        }

    ?>
</div>
</body>
</html>