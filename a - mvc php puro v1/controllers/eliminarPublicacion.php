<?php

include("../config/config.php");
$publicacion->eliminarPublicacion($_GET['id']);

if($publicacion){
    header("Location: ../views/publicaciones.php?ok");
}
?>