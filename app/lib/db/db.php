<?php

namespace app\lib\db;

use app\lib\config;
use \PDO;

class DB extends config\Config{
 
    private $config;
    protected $db;
    protected $host;
    protected $user;
    protected $password;
    protected $connection;
    
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
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8", $this->user, $this->password, [
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (\PDOException $error) {
                $error->getMessage();
        }  
    }
}
