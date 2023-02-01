<?php
include("../config/config.php");

$revisar=getimagesize($_FILES["image"]["tmp_name"]);

if($revisar != false){
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));
}else{
    echo "sin imagen";
}

$contenidos->editarContenido($_POST['titulo'], $_POST['subtitulo'], $_POST['volanta'], $_POST['copete'], $_POST['cuerpo'], $imgContenido, $_POST['id_noticia']);

if($contenidos){
    header("Location: ../views/ver_contenido.php?ok");
}else{
    header("Location: ../views/editarContenido.php?no");
}

?>

