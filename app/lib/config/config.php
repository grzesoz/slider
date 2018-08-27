<?php

namespace lib\config\Configs;

class Config{
    
    private $config;

    public function __construct(){
       $this ->config = parse_ini_file(__DIR__ ."/../../config/config.ini", true);
    }

    public function getConfigurationDB(){
   
        $ConfigurationDB = [];
        
        $ConfigurationDB['host'] = $this ->config['db']['host'];
        $ConfigurationDB['user'] = $this ->config['db']['user'];
        $ConfigurationDB['password'] = $this ->config['db']['password'];
        $ConfigurationDB['database'] = $this ->config['db']['database'];

        return $ConfigurationDB;
    }
    
    public function getConfigurationPage(){
   
       $getConfigurationPage = [];
        
       $getConfigurationPage['charset'] = $this ->config['page']['charset'];

        return $getConfigurationPage;
    }
}