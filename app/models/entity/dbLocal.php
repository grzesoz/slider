<?php

namespace models\entity\dblocal;

use app\lib\db;
use \PDO;

class dbLocal extends db\DB{
    
    public function __construct() {
        parent::__construct($this->db,$this->host,$this->user,$this->password);

        }  
     
     public function addInfoAboutPicture($name , $size , $type) {
        $pytanie = $this->connection->prepare('
            INSERT INTO foto(`name`, `size`, `type`) VALUES ("' . $name . '","' . $size . '","' . $type . '")
            ');
        $pytanie->execute();
        $pytanie->fetch(PDO::FETCH_OBJ);
    }
    
       public function getInfoAboutAllPicture() {
        $pytanie = $this->connection->prepare('
            SELECT * FROM foto
            ');
        $pytanie->execute();
        $odp = $pytanie->fetchALL(PDO::FETCH_OBJ);

        return $odp;
    }
    
        public function deleteItem($id){
        $pytanie = $this->connection->prepare('
            DELETE FROM foto
            WHERE id=' . $id . '
            ');
        $pytanie->execute();
        }
}


