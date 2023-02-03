<?php
class Juego{
private $baseDatos;

function __construct($base){
    $this->baseDatos= $base;
}

//insertar un juego
public function insertarJuego($juego, $fecha, $categoria, $data, $img){
    $resp = $this->baseDatos->ejecutarQuery("INSERT INTO juego VALUES ($juego, '$fecha', '$categoria', '$data', DEFAULT, $img)");
    return $resp;
}

//seleccionar todos los juegos y los muestra
public function seleccionarJuegos(){
    $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM juego");
    return $resp;
}

//selecciona grilla - sopa o trivia
public function seleccionarGrillaSopaTrivia($id){
    $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM juego WHERE juego = $id");
    return $resp;
}

//consultar un juego en particular
public function seleccionarUnJuego($id){
    $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM juego WHERE IDs = $id");
    return $resp;
}

//modificar los datos de un juego en particular
public function modificarDatosJuego($juego, $fecha, $categoria, $data, $id, $imagen){
    $resp = $this->baseDatos->ejecutarQuery("UPDATE juego SET JUEGO='$juego', FECHA='$fecha', CATEGORIA='$categoria', DATOS ='$data', imagen = $imagen WHERE IDs=$id");
    return $resp;
}

//modificar un juego
public function modificarJuego($id){
    $resp = $this->baseDatos->ejecutarQuery("UPDATE juego SET DATOS='$juego', WHERE IDs=$id");
    return $resp;
}

//elimina un juego
public function borrarJuego($id){
    $resp = $this->baseDatos->ejecutarQuery("DELETE FROM juego WHERE IDs=$id");
    return $resp;
}

}

?>