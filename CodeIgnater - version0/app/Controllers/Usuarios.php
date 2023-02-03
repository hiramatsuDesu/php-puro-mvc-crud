<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller{

    public function index(){
        $usuario = new Usuario();
        
        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');
        
        return view('sesion', $datos);
     
    }

    public function consultar(){
        $usuario = new Usuario();

        $u=$this->request->getVar('user');
        $c=$this->request->getVar('clave');
        
        $dato_u=$usuario->where('usuario',$u)->first();
        $dato_c=$dato_u['clave'];

        $verificar= password_verify($c,$dato_c);

        if($dato_u && $verificar){
            //return $this->response->redirect(site_url('/intermedio'));
            $data=[ "usuario" => $datos_u['usuario'],
                    "type" => $dato_c];
                $session = session();
                $session->set($data);
            return $this->response->redirect(base_url('/intermedio'));
        }else{
            echo "No ha podido ser validado";
        }
    }

    public function acceso(){
        $usuario = new Usuario();
        return view('intermedio');

    }

    public function salir(){
        $session=session();
        $session->destroy();
        return $this->response->redirect(base_url('ingresar'));
    }
}