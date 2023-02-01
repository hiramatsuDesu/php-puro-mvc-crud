<?php
class Contenido{
    function __construct($base){
        $this->baseDatos= $base;
    }

    public function insertarContenido($fecha, $titulo, $sub, $vola, $cope, $cuer, $img){
        $resp = $this->baseDatos->ejecutarQuery("INSERT INTO contenido VALUES(DEFAULT, '$fecha', '$titulo', '$sub', '$vola', '$cope', '$cuer', '$img')");
        return $resp;
    }

    public function elminiarContenido($id){
        $resp=$this->baseDatos->ejecutarQuery("DELETE FROM contenido WHERE id_contenido = $id");
        return $resp;
    }

    public function editarContenido($titulo, $sub, $vola, $cope, $cuerpo, $img, $id){
        $resp = $this->baseDatos->ejecutarQuery("UPDATE contenido SET titulo = '$titulo', subtitulo= '$sub', volanta='$vola', copete='$cope', cuerpo = '$cuerpo', imagen='$img' WHERE id_contenido=$id");
        return $resp;
    }

    public function mostrarTodoContenido(){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM contenido");
        return $resp;
    }

    public function mostrarUnContenido($id){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM contenido WHERE id_contenido=$id");
        return $resp;
    }

    public function mostrarContenidoFecha($fecha){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM contenido WHERE fecha = '$fecha'");
        return $resp;
    }
}

?>

