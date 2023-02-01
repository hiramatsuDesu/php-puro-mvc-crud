<?php
$bd = mysqli_connect("localhost", "root", "", "practica") or exit("Error al conectarse a la base de datos ");

if(!empty($_GET['id'])){
    $result = $bd->query("SELECT imagen FROM contenido WHERE id_contenido={$_GET['id']}");
    if($result -> num_rows >0){
        $imgDatos=$result->fetch_assoc();
        header("Content-type: image/jpeg");
        echo $imgDatos['imagen'];
    }else{
        echo 'Sin imagen';
    }
}
?>