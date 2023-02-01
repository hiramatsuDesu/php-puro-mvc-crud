<?php
include('../config/config.php');

$revisar=getimagesize($_FILES["image"]["tmp_name"]);

date_default_timezone_set('America/Argentina/Cordoba');
$fecha = date("Y/m/d");

$contenidos->insertarContenido($fecha, $_POST['titulo'], $_POST['subtitulo'], $_POST['volanta'], $_POST['copete'], $_POST['cuerpo'], $imgContenido);

if($contenidos){
    header("Location: ../views/carga_contenido.php?ok");
}else{
    header("Location: ../views/carga_contenido.php?no");
}


?>