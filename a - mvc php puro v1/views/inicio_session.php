<?php
session_start();
?>
<section id=#sesion>
<h1>Inicie Sesion</h1>

<form action="../controllers/controlador.php" method="POST">
    <label>Ingrese Usuario</label><br>
    <input type="text" name="user" maxlenght="6" required><br>

    <label>Ingrese Clave</label><br>
    <input type="password" name="clave" maxlenght="6" required><br>

    <input type="submit" value="Enviar">
</form>

</section>

<?php
if(isset($_GET['no'])){
    echo "no se pudo validar el usuario";
}
?>
