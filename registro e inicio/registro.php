<?php
session_start();

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$correo = $_POST['mail'];
$usu = $_POST['usuario'];
$contra = password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=>4));

if($_POST['code'] == $_SESSION['captcha']){
    include("conexion.php");
    $_SESSION["captcha"] = md5(rand()*time());

    $consulta_usuario = mysqli_query($data_bass, "SELECT usuario FROM socios WHERE usuario = '$usu' ");

    if($consulta_usuario){
        header("Location: registrarse.php?no");
    }else{
        mysqli_query($data_bass, "INSERT INTO socios VALUES('DEFAULT', '$nom', '$ape', '$correo', '$usu', '$contra')");
        header("Location: ingresar.php?ok");
    }

}else{
    $_SESSION["captcha"] = md5(rand()*time());
    header("Location: registrarse.php?no");
}
?>