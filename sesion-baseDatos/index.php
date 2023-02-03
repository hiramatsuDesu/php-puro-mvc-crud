<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hiramatsu, Maria Jose">
    <title>Document</title>
</head>
<body>

<form action="session.php" method="POST">
    <label>Ingrese Usuario</label><br>
    <input type="text" name="user" maxlenght="6" required><br>

    <label>Ingrese Clave</label><br>
    <input type="password" name="clave" maxlenght="6" required><br>

    <input type="submit" value="Enviar">
    <?php
        if(isset($_GET['no'])){
            echo "<p>No se ha podido validar el usuario</p>";
        }
    ?>
</form>
    
</body>
</html>