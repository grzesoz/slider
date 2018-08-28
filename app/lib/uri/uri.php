<?php
namespace app\lib\uri;

class URI{
    
        private $dir;
        private $controler;
        private $method;
        
        public function __construct(){
            $this->dir = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];

            if($_SERVER['REQUEST_URI']!=='/'){
                $requestUriArr = explode("/", $_SERVER['REQUEST_URI']);
                $this->controler = $requestUriArr[1];
                $this->method = $requestUriArr[2];
            }
            else{
                $this->controler = "user";
                $this->method = "index";
            }

        }
        
         public function getDir(){
             return $this->dir;
         }
         
         public function getControler(){
             return $this->controler;
         }
         
         public function getMethod(){
             return $this->method;
         }
        
}
