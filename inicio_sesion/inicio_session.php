<?php
session_start();

$usu = $_POST['usuario'];
$cla = $_POST['clave'];

if(strtoupper($_REQUEST["cod_captcha"]) == $_SESSION["captcha"]){
    $_SESSION["captcha"] = md5(rand()*time());
    include("conexion.php");
    $consulta=mysqli_query($data_bass, "SELECT clave FROM socios WHERE usuario = '$usu' ");
    $consulta_clave = mysqli_fetch_assoc($consulta);
    $verificar = password_verify($cla, $consulta_clave['clave']);
    if($verificar){
        header("Location: tienda.php");
    }

}else{
    $_SESSION["captcha"] = md5(rand()*time());
    header("Location: ingresar.php?no");
}

?>
