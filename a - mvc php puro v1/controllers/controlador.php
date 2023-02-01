<?php
session_start();
include('../config/config.php');


$usu=$_POST['user'];
$cla=$_POST['clave'];

$resultado=$usuarios->seleccionarUsuario_porUsuario($usu);

$consulta_clave=$resultado[0]['clave'];

$verificar = password_verify($cla, $consulta_clave);

if($verificar){
    header("Location: ../views/contenido.php#content");
    $_SESSION['administrador'] = $usu;
    //header("Location: http://trivia.matecocidogames.com/");
    
}else{
    header("Location: ../views/inicio_session.php?no");
}

?>

