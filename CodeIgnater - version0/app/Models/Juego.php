<?php 
namespace App\Models;

use CodeIgniter\Model;

class Juego extends Model{
    protected $table      = 'juego';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'IDs';
    protected $allowedFields=['JUEGO', 'FECHA', 'CATEGORIA','DATOS', 'IDs', 'imagen'];
}