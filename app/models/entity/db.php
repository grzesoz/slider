<?php

namespace models\entity\Base;

use lib\config\Configs;
use PDO;

class db extends Configs\config{
 
    private $config;
    private $db;
    private $host;
    private $user;
    private $password;
    private $connection;
    
    public function __construct($db = null, $host = null, $user = null, $password = null) {
        parent::__construct();

        if ($db == null) {
            $this->config = parent::getConfigurationDB();
            $this->db = $this->config['database'];
            $this->host = $this->config['host'];
            $this->user = $this->config['user'];
            $this->password = $this->config['password'];
        } else{
            $this->db = $db;
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
        }
        
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password, [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (\PDOException $error) {
                $error->getMessage();
        }  
    }
}
