<?php
include('../models/bd.php');
include('../models/juego.php');

define('HOST', '');
define('USUARIO', '');
define('CLAVE', '');
define('BASE', '');

$base = new Base_Datos(HOST, USUARIO, CLAVE, BASE);
$juegos = new Juego($base);
?>