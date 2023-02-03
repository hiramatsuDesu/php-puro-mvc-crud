<?php
session_name("login");
session_start();
session_destroy();

if($_SERVER['PHP_AUTH_USER']){
    die();
}
?>