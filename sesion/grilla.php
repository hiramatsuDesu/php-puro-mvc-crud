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

if($_SESSION["usser"]){
    echo "logueado";

}else{
    echo "usuario no logueado";
}
?>