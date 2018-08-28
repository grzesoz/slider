<?php

namespace app\lib\router;

class Router{
   
    private $class;
    private $method;
    private $params;
    
    public function __construct($class,$method){
        $this->class = $class;
        $this->method = $method;
    }

     public function execute(){
//         call_user_func(array("app\\controller\\".$this->class, $this->method));
         
        $class = 'app\\controller\\' . $this->class;
        $reflection = new \ReflectionMethod($class, $this->method);
        $reflection->invoke(new $class, $this->params);
     }
}