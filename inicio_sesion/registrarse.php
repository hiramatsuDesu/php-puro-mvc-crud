<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <heaer>
        <a href="index.php">
            <input type="button" value="Inicio"><br>
        </a>

        <a href="ingresar.php">
            <input type="button" value="Ingresar"><br>
        </a>
    </heaer>

<?php
function texto_cadena(){
    $cadena = "abcdefghijklmnopqrstuvwxyz0123456789*+-/=?¿!";
    $codigo="";
    for($i = 0; $i<6; $i++){
        $codigo.=$cadena[rand(0,40)];
    }
    return $codigo;
}

$_SESSION['captcha'] = texto_cadena();
?>


    <div>
        <h3>Registrarse</h3>
        <form action="registro.php" method="POST">
            <label>Nombre</label><br>
            <input type="text" name="nombre" required><br>

            <label>Apellido</label><br>
            <input type="text" name="apellido" required><br>

            <label>E-mail</label><br>
            <input type="email" name="mail" required><br>
            
            <label>Usuario</label><br>
            <input type="text" name="usuario" maxlength="6" required><br>
            <label>Debe contener 6 caracteres</label>

            <label>Genere la clave</label><br>
            <input type="password" name="clave" maxlength="6" required><br>
            <label>Debe contener 6 caracteres</label>

            <label>Resuelva el Captcha</label><br>
            <img src="captcha.php"><br>
            <input type="text" name="code" width="25"><br>

            <input type="submit" value="Enviar"><br>
        </form>

        <?php
            if(isset($_GET['no'])){
                echo "<p>No se ha podido registrar al usuario.</p>
                <p>Intente registrarse con otro usuario</p>";
            }
        ?>
    </div>
</body>
</html>