<?php
include("../config/config.php");

/*
Menu opciones
1 - insertar Juego
2 - seleccionar todos los juegos
3 - trae todos los juegos de grilla o de sopa o de trivia dependiendo si por parametro recibe (0 - 1 - 2)
4 - trae un solo juego en particular
5 - modifica los datos de un juego como fecha categoria data o si es (0 - 1 - 2) o imagen.
6 - modifica los datos del un juego 
7 - elimina un juego

*/



if(isset($_GET['ACTION'])){
    $ACTION = $_GET['ACTION'];
    switch($ACTION)
        {
            
            //insertar juego
            case 1: $juegos->insertarJuego($_GET['juego'], $_GET['fecha'], $_GET['categoria'], $_GET['data'], $_GET['imagen']);
            break;
            

            //seleccionar todos los juegos
            //referencias: aqui podes colocar cualquier otra equiteta dentro de los "comillas" yo pongo parrafo pero podes usar la que necesites

            
            case 2: $listar = $juegos->seleccionarJuegos();
                for($i=0; $i<count($listar); $i++){
                    echo "<p>".$listar[$i]['JUEGO']."</p><p>".$listar[$i]['FECHA']."</p><p>".$listar[$i]['DATOS']."</p><p>".$listar[$i]['IDs']."</p><p>".$listar[$i]['imagen']."</p>";
                }
            break;

            
            //trae todos los juegos de grilla o de sopa o de trivia dependiendo si por parametro recibe (0 - 1 - 2)
            case 3: if(isset($_GET['ACTION_B'])){
                switch ('$ACTION_B') {
                    case 0:
                        $listar = $juegos->seleccionarGrillaSopaTrivia($_GET['juego']);
                        for($i=0; $i<count($listar); $i++){
                            echo "<p>".$listar[$i]['JUEGO']."</p><p>".$listar[$i]['FECHA']."</p><p>".$listar[$i]['DATOS']."</p><p>".$listar[$i]['IDs']."</p><p>".$listar[$i]['imagen']."</p>";
                        }
                        break;

                    case 1: 
                        $listar = $juegos->seleccionarGrillaSopaTrivia($_GET['juego']);
                        for($i=0; $i<count($listar); $i++){
                            echo "<p>".$listar[$i]['JUEGO']."</p><p>".$listar[$i]['FECHA']."</p><p>".$listar[$i]['DATOS']."</p><p>".$listar[$i]['IDs']."</p><p>".$listar[$i]['imagen']."</p>";
                        }
                        break;

                    case 2: 
                        $listar = $juegos->seleccionarGrillaSopaTrivia($_GET['juego']);
                        for($i=0; $i<count($listar); $i++){
                            echo "<p>".$listar[$i]['JUEGO']."</p><p>".$listar[$i]['FECHA']."</p><p>".$listar[$i]['DATOS']."</p><p>".$listar[$i]['IDs']."</p><p>".$listar[$i]['imagen']."</p>";
                        }
                        break;
                }
            }

            //trae un solo juego en particular
            case 4: 
                $listar = $juegos->seleccionarUnJuego($_GET['id']);
                echo "<p>".$listar[0]['JUEGO']."</p><p>".$listar[0]['FECHA']."</p><p>".$listar[0]['DATOS']."</p><p>".$listar[0]['IDs']."</p><p>".$listar[0]['imagen']."</p>";
                break;

            //modifica los datos de un juego como fecha categoria data o si es (0 - 1 - 2) o imagen.
            case 5: $juegos->modificarDatosJuego($_GET['juego'], $_GET['fecha'], $_GET['categoria'], $_GET['data'], $_GET['id'], $_GET['imagen']);
            break;

            //elimina un juego
            case 6: $juegos->borrarJuego($_GET['id']);
            break;

            
        }
        
}
?>