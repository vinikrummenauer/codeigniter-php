<?php
namespace App\Models;
use CodeIgniter\Model;

    class HomeModel extends Model{
        protected $table = 'moviment';
        public function teste(){
            $resp = $this->find();
            var_dump($resp);

            
        }


    }




?>