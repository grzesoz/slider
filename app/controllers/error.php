<?php

namespace app\controller;

use app\lib\view;
use app\lib\config;

class Error{
    
    private $code;
    private $message;
    
    public function __construct($code = 500,$message = "Błąd. Nie ma takiej strony"){
        $this->conf = new config\Config;
        $this->view = new view\View($this->conf  ->getConfigurationPage());
        
        $this->code = $code;
        $this->message =$message;
    }
    
    public function showError(){
        $this->view->showError($this->code,$this->message);
    }
   
}
