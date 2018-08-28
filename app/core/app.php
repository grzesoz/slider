<?php

namespace app\core;

use app\lib\uri;
use app\lib\router;

class App{
    
    private $uri;
    private $router;
    
    public function __construct()
    {
        $this->uri = new uri\URI;
    }
    
    public function render(){
        $this->router = new router\Router(
                $this->uri->getControler(),
                $this->uri->getMethod()    
        );

        $this->router->execute();
    }
}