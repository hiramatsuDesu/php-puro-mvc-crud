<?php
class Usuario{
    private $baseDatos;

    function __construct($base){
        $this->baseDatos= $base;
    }

    //insertar usuario
    public function insertarUsuario($clave, $usuario, $nombre, $apellido, $tel, $mail){
        $resp = $this->baseDatos->ejecutarQuery("INSERT INTO usuario VALUES (DEFAULT, '$clave', '$usuario', '$nombre', '$apellido', $tel, '$mail')");
        return $resp;
    }

    //seleccionar todos los usuarios
    public function seleccionarUsuarios(){
        $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM usuario");
        return $resp;
    }

    //consultar un usuario por id de la tabla de la base de datos
    public function seleccionarUsuario_porId($id){
        $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM usuario WHERE id_usuario = $id");
        return $resp;
    }

    //consultar un usario por clave 
    public function seleccionarUsuario_porClave($c){
        $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM usuario WHERE clave='c'");
        return $resp;
    }

    //consultar un usario por clave 
    public function seleccionarUsuario_porUsuario($u){
        $resp = $this->baseDatos->ejecutarQuery("SELECT * FROM usuario WHERE usuario='$u'");
        return $resp;
    }

    //modificar los datos del usuario
    public function modificarDatosUsuario($id, $clave, $usuario, $nombre, $apellido, $tel, $mail){
        $resp = $this->baseDatos->ejecutarQuery("UPDATE usuario SET clave='$clave', usuario='$usuario', nombre='$nombre', apellido='$apellido' WHERE id_usuario=$id");
        return $resp;
    }

    //elimina un usuario
    public function borrarUsuario($id){
        $resp = $this->baseDatos->ejecutarQuery("DELETE FROM usuario WHERE id_usuario=$id");
        return $resp;
    }
}

?>