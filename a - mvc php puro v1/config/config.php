<?php
include('../models/bd.php');
include('../models/usuario.php');
include('../models/contenido.php');
include('../models/publicaciones.php');

//configuracion de la base de datos
define('HOST', 'localhost');
define('USUARIO', 'root');
define('CLAVE', '');
define('BASE', 'practica');


$base = new Base_Datos(HOST, USUARIO, CLAVE, BASE);
$usuarios = new Usuario($base);
$contenidos = new Contenido($base);
$publicacion = new Publicacion($base);


?>
