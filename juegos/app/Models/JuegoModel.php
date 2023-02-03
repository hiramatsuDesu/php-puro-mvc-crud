<?php 
namespace App\Models;

use CodeIgniter\Model;

class JuegoModel extends Model{
    protected $table      = 'juego';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IDs';
    protected $allowedFields=['JUEGO', 'FECHA', 'CATEGORIA','DATOS', 'IDs', 'imagen'];

    /*
    public function get($id=null){
        if($id===null){
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['IDs' => $id])
            ->first();
        
    }
*/
}

?>