<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: OPTIONS");
header("Allow: OPTIONS");
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'OPTIONS'){
    die();
}

session_name("login");
session_start();

//hardcodeamos el usuario y la clave

define('PHP_AUTH_USER', 'nombre');
define('PHP_AUTH_PW', 'clave');

if(!isset($_SERVER['PHP_AUTH_USER'])){
    header("WWW-Authenticate: Basic realm=\"Private Area\"");
    header("HTTP/1.0 401 Unauthorized");
    print "Sorry - you need valid credentials to be granted access!\n";
    exit;
}else{
    if($_SERVER['PHP_AUTH_USER'] && $_SERVER['PHP_AUTH_PW']){
        $_SESSION["usser"]=PHP_AUTH_USER;

        print "Welcome";
        header('Content-Type:text/html');
        print '<p><a href="grilla.php"><input type="button" value="key_value"></a></p>';
        print '<p><a href=""><input type="button" value="key_value"></a></p>';
        print '<p><a href=""><input type="button" value="key_value"></a></p>';

        print '<p><a href="salir.php"><input type="button" value="Salir"></a></p>';
        }
        
    else {
        header("WWW-Authenticate: Basic realm=\"Private Area\"");
        header("HTTP/1.0 401 Unauthorized");
        print "Sorry - you need valid credentials to be granted access!\n";
        exit;
    }

}

?>