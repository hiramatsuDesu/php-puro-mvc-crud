<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: OPTIONS");
header("Allow: OPTIONS");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'OPTIONS'){
    die();
}

session_name("login");
session_start();

if(isset($_SESSION["p64o566"])){

    header('Content-Type:text/html');
    print '<p><a href="intermedio.php"><input type="button" value="key_value"></a></p>';
    print '<p><a href=""><input type="button" value="key_value"></a></p>';
    print '<p><a href=""><input type="button" value="key_value"></a></p>';

    print '<p><a href="salir.php"><input type="button" value="Salir"></a></p>';
}else{
    die();
}

?>