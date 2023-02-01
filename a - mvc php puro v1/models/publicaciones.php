<?php
class Publicacion{
    function __construct($base){
        $this->baseDatos= $base;
    }

    public function insertarPublicacion($id, $fecha, $titulo, $sub, $vola, $cope, $cuer, $img){
        $resp = $this->baseDatos->ejecutarQuery("INSERT INTO publicados VALUES(DEFAULT, $id, '$fecha', '$titulo', '$sub', '$vola', '$cope', '$cuer', '$img')");
        return $resp;
    }

    public function eliminarPublicacion($id){
        $resp=$this->baseDatos->ejecutarQuery("DELETE FROM publicados WHERE id_publicados = $id");
        return $resp;
    }

    public function editarPublicacion($id, $titulo, $sub, $vola, $cope, $cuerpo, $img){
        $resp = $this->baseDatos->ejecutarQuery("UPDATE publicados SET titulo = '$titulo', subtitulo= '$sub', volanta='$vola', copete='$cope', cuerpo = '$cuerpo', imagen='$img' WHERE id_publicados=$id");
        return $resp;
    }

    public function cargarFecha($id, $fecha){
        $resp = $this->baseDatos->ejecutarQuery("UPDATE publicados SET fecha_publicacion='$fecha' WHERE id_contenido = $id");
    }

    public function mostrarPublicados(){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM publicados");
        return $resp;
    }

    public function mostrarUnaPublicacion($id){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM publicados WHERE id_publicados=$id");
        return $resp;
    }

    public function mostrarPublicacionFecha($fecha){
        $resp=$this->baseDatos->ejecutarQuery("SELECT * FROM publicados WHERE fecha_publicacion = '$fecha'");
        return $resp;
    }
}

?>