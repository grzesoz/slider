<?php

namespace app\controller;

use app\lib\view;
use app\lib\config;

class User{
    
    private $css = 'main';
    private $js = 'main';
    
    private $conf;
    private $view;
    private $data = [];

    public function __construct(){
        $this->conf = new config\Config;
        $this->view = new view\View($this->conf  ->getConfigurationPage());
    }
    
    public function index(){
        $this ->data['title']="Slider";
        $this->view->display('slider', $this->data, $this->css, $this->js);
    }
    
    public function add(){
        $this ->data['title']="Dodaj plik";
        $this->view->display('addPicture', $this->data, $this->css, $this->js);
    }
    
    public function show(){
        $this ->data['title']="Pokaż pliki";
        $this->view->display('showList', $this->data, $this->css, $this->js);
    }
    
    public function upload(){
        $this ->data['title']="Dziękujemy za dodanie plików";
        $this->view->display('thankYou', $this->data, $this->css, $this->js);
        
    }
    
    

}
