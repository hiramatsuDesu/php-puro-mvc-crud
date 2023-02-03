<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Juego;

class Juegos extends Controller{

    public function index(){
        $juego = new Juego();
        $datos['juego']=$juego->findAll();
        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');
        return view('verJuegos', $datos);
    }

    public function cargar(){
        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');
        return view('cargar', $datos);
    }

    public function guardar(){
        $juego = new Juego();
        
       $datos=[
            'JUEGO'=>$this->request->getVar('tipoJuego'),
            'FECHA'=>$this->request->getVar('fecha'),
            'CATEGORIA'=>$this->request->getVar('categoria'),
            'DATOS'=>$this->request->getVar('datosJuego'),
            'imagen'=>$this->request->getVar('imagen')
            ];
            $juego->insert($datos);
        
        echo "Ingresado a la base de datos";
    }

    public function borrar($id=null){
        $juego = new Juego();
        $juego->where('IDs', $id)->delete();

        return $this->response->redirect(site_url('/juegos'));
    }

    public function editar($id=null){
        $juego = new Juego();
        $datos['jueg']=$juego->where('IDs', $id)->first();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('editar', $datos);
    }

    public function actualizar(){
        $juego = new Juego();
        $datos=[
            'JUEGO'=>$this->request->getVar('tipoJuego'),
            'FECHA'=>$this->request->getVar('fecha'),
            'CATEGORIA'=>$this->request->getVar('categoria'),
            'DATOS'=>$this->request->getVar('datosJuego'),
            'imagen'=>$this->request->getVar('imagen')
            ];
            $id=$this->request->getVar('id');
        
        $juego->update($id, $datos);
    }
}