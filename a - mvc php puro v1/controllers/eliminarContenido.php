<?php
include("../config/config.php");

$contenidos->elminiarContenido($_GET['id']);

if($contenidos){
    header("Location: ../views/ver_contenido.php");
}else{
    header("Location: ../views/ver_contenido.php");
}

?>