<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\JuegoModel;

class RestJuegos extends ResourceController
{
    use ResponseTrait;
    protected $modelName = 'App\Models\JuegoModel';
    protected $format    = 'json';

    public function index()
    {
        $juego = new JuegoModel();
        return $this->genericResponse($this->model->findAll(), "vacio", 200);
    }

    /*
    public function show($id = null){

        if($id == null){
            return $this->genericResponse(null, "id no fue encontrado", 500);
        }

        $juego = $this->model->find($id);
        var_dump($juego);

        if(!$juego){
            return $this->genericResponse(null, "Id no encontrado", 500);
        }

        return $this->genericResponse($juego, "", 200);
    }
    */

    //devuelve las categorias
    public function show($id = null){

        if($id == null){
            return $this->genericResponse(null, "Categoria no encontrada", 500);
        }

        $juego = $this->model->where('JUEGO', $id)->findAll();


        if(!$juego){
            return $this->genericResponse(null, "Categoria no encontrada", 500);
        }

        return $this->genericResponse($juego, "", 200);
    }

    public function create(){
        $juego = new JuegoModel();
        $datos= $juego->insert([
            'JUEGO'=>$this->request->getPost('JUEGO'),
            'FECHA'=>$this->request->getPost('FECHA'),
            'CATEGORIA'=>$this->request->getPost('CATEGORIA'),
            'DATOS'=>$this->request->getPost('DATOS'),
            'imagen'=>$this->request->getPost('imagen')
            ]);
            if($datos){
                echo "Se ha cargado con exito";
            }else{
                echo "No se ha podido cargar";
            }

    }

    public function update($id=null){
        $juego = new JuegoModel();

        $data = $this->request->getRawInput();

        $juego=$this->model->find($id);

        if(!$juego){
            return $this->genericResponse(null, "Juego no existe con ese id", 500);
        }

        $juego->update($id, [
            'JUEGO'=>$data['JUEGO'],
            'FECHA'=>$data['FECHA'],
            'CATEGORIA'=>$data['CATEGORIA'],
            'DATOS'=>$data['DATOS'],
            'imagen'=>$data['imagen']
            ]);
            if($juego){
                echo "Se ha modificado con exito";
            }else{
                echo "No se ha podido modificar";
            }
    }

    public function delete($id = null){

        $juego = $this->model->find($id);

        if(!$juego){
            return $this->genericResponse(null, "Id no encontrado", 500);
        }else{
            $this->model->delete($id);
            return $this->genericResponse("Juego id: $id eliminado con exito", "",200);
        }
    }

    private function genericResponse($data, $msj, $code){
        if($code == 200){
            return $this->respond(array(
                "data" => $data,
                "code" => $code
            ));
        }else{
            return $this->respond(array(
                "msj" => $msj,
                "code" => $code
            ));
        }
    }
}