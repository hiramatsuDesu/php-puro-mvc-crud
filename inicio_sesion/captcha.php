<?php
session_start();

header("Content-type: image/jpeg");
$imagen = imagecreate(120, 40);
$color_fondo = imagecolorallocate($imagen, 87, 148, 161);
$color_texto = imagecolorallocate($imagen, 15, 15, 15);
imagestring($imagen, 10, 20 , 15, $_SESSION['captcha'], $color_texto);
imagejpeg($imagen);

?>