<?php

namespace app\controller;

use app\lib\view;
use app\lib\config;
use app\lib\files;
use app\controller;
use models\entity\dblocal;
use app\lib\post;

class User{
    
    private $css = 'main';
    private $js = 'main';
    
    private $conf;
    private $view;
    private $db;
    private $post;
    private $data = [];
    
    private $files;

    public function __construct(){
        $this->conf = new config\Config;
        $this->view = new view\View($this->conf  ->getConfigurationPage());
        $this->db = new dblocal\Dblocal;
        $this->post = new post\Post;
        $this->files = new files\Files($_FILES);
    }
    
    public function index(){
        $this ->data['title']="Witam";
        $this->view->display('welcome', $this->data, $this->css, $this->js);
    }
    
    public function slider(){
        $this ->data['title']="Slider";
        $this->view->display('slider', $this->data, $this->css, $this->js);
    }
    
    public function add(){
        $this ->data['title']="Dodaj plik";
        $this->view->display('addPicture', $this->data, $this->css, $this->js);
    }
    
    public function show(){
        if($this->post->check() == 2)
        {
            $this ->db->deleteItem($this->post->toDeleteId);
            $this->files -> deleteFile($this->post->toDeleteName);
        }            
            
        $this ->data['db'] = $this->db->getInfoAboutAllPicture();
        $this ->data['title']="Pokaż pliki";
        $this->view->display('showList', $this->data, $this->css, $this->js);
    }
    
//    public function deleteItem(){
//        $this ->db->deleteItem($this->post->toDeleteId);
//
//        $this->files -> deleteFile($this->post->toDeleteName);
//                
//        $this ->data['db'] = $this->db->getInfoAboutAllPicture();
//        $this ->data['title']="Pokaż pliki";
//        $this->view->display('showList', $this->data, $this->css, $this->js);
//    }
    
    public function thank_you() {
        switch ($this->files ->uploadImage()) {
            case 0:
                $app = new controller\Error(500, 'Plik nie został dodany');
                $app->showError();
                break;
            case 1:
                $key = key($_FILES); 
                $this->db->addInfoAboutPicture($_FILES[$key]['name'] , $_FILES[$key]['size'] , $_FILES[$key]['type']);

                $this->data['title'] = "Dziękujemy za dodanie plików";
                $this->view->display('thankYou', $this->data, $this->css, $this->js);
                break;
        }
    }
    
    public function getInfoAboutAllPictureToAjax(){
        echo json_encode($this->db->getInfoAboutAllPicture());
    }

}
