<?php
include("../config/config.php");

$bd = mysqli_connect("localhost", "root", "", "practica") or exit("Error al conectarse a la base de datos ");

$codigo=$_GET['id'];

if($codigo){

    date_default_timezone_set('America/Argentina/Cordoba');
    $fecha = date("Y/m/d");
    
    $ejecutar = mysqli_query($bd, "INSERT INTO publicados (id_contenido, titulo, subtitulo, volanta, copete, cuerpo, imagen) SELECT id_contenido, titulo, subtitulo, volanta, copete, cuerpo, imagen FROM contenido where id_contenido=$codigo");
    
    $publicacion->cargarFecha($codigo, $fecha);
    
    header("Location: ../views/publicaciones.php");
}else{
    header("Location: ../views/publicaciones.php?no");
}


?>