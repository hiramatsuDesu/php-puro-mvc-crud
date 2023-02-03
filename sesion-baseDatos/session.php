<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: OPTIONS");
header("Allow: OPTIONS");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'OPTIONS'){
    die();
}

session_name("login");
session_start();

$u=$_POST['user'];
$c=$_POST['clave'];

include("conexion.php");

$consulta=mysqli_query($bd, "SELECT clave FROM usuario WHERE usuario='$u'");
$consulta_clave=mysqli_fetch_assoc($consulta);
$verificar=password_verify($c, $consulta_clave['clave']);

if($consulta && $verificar){
    $_SESSION["p64o566"]=$u;
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'juegos.php';
    header("Location: http://$host$uri/$extra");
    exit();

}else{
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'juegos.php';
    header("Location: http://$host$uri/$extra?no");
    exit();
}

?>