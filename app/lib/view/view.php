<?php

namespace app\lib\view;

use app\lib\uri;

class View{
    
    private $config;
    private $uri;
    
    public function __construct($config=null) {
        $this->config = $config;
        $this->uri = new uri\URI();
    }
    
    /**
     * Method which load layout
     * @param $view - add this view
     * @param $data - information
     * @param $css
     * @param $js
     * */
    public function display($view, $data = [], $css = null, $js = null) {
        require_once 'app/views/layout/layout.php';
    }
    
    public function showError($code, $message, $css = "errorCSS main") {
        
        $data['code']=$code;
        $data['message']=$message;
        
       require_once 'app/views/layout/layoutError.php';
    }
    
     /**
     * Method which load element
     * @param $element - add this element
     * */   
    public function importElement($element , $data = [] , $directory = "default") {
        if (file_exists('app/views/' . $directory . "/elements/" . $element . '.php')) {
            require_once 'app/views/' . $directory . "/elements/" . $element . '.php';
        } else {
//            tu będzie rzucało wyjątkiem
//            throw new ViewException("Wewnętrzny błąd serwera", 500);
        }
    }

    /**
     * Method which load element
     * @param $view - add this element
     * @param $data - information
     * */    
    public function showContent($view, $data =[]) {
        if (file_exists('app/views/user/' . $view . '.php')){
            require_once 'app/views/user/' . $view . '.php';
        }
        else{
//            tu będzie rzucało wyjątkiem
//            throw new ViewException("Wewnętrzny błąd serwera", 500);
        }
    }
    
    public function loadLanguage($language = 'pl') {
        echo "lang=".$language;
    }
    
    public function loadTitle($title) {
        echo "<title>".$title."</title>";
    }
    
    public function charset() {
        echo "<meta charset=".$this->config['charset'].">";         
    }
    
    public function loadCss($css) {
        if($css != null){
            $cssArr = explode(" ", $css);
            foreach ($cssArr as $one) {
                echo '<link rel="stylesheet" type="text/css" href=../public/css/'.$one.'.css>';
            }   
        }
    }
    
    public function loadJs($js) {
        if($js != null){
            echo '<script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>';
            
            $jsArr = explode(" ", $js);
            foreach ($jsArr as $one) {
                echo '<script type="text/javascript" src="../public/js/'.$one.'.js"></script>';
            }   
        }
    }
        
    public function startForm($action, $method = 'post', $id=null, $enctype=null){
        
            $html = '<form action="'.$action.'"';
            $html .= 'method='.$method .' ';

            if($id!=null){
                $html .= 'id="'.$id.'" ';
            }
            
            if($enctype!=null){
                $html .= 'enctype="'.$enctype.'" ';
            }
             
             $html .= ' >';   
             
        return $html;
    }
    
    public function endForm(){
        
        $html= '</form>';
        
        return $html;
    }
    
    public function buildLink($name, $data, $class = null, $target = null){

        $html = '<a href="' . $this->uri->getDir() . '/' . $data . '"';

        if ($target != null) {
            $html .= ' target=" '. $target . '"';
        }

        $html .= '>' ;
                
        $html.=  '<div ';

        if($class!= null){
            $html .= 'class="';
            $html .= $class;
            $html .= '"';
            }  
        $html.='>' . $name . '</div>'.'</a>' ;      

        return $html;
        
    }
    
    public function buildLink2($name, $data, $class = null, $target = null){
        
        $html = '<a href="' . $this->uri->getDir() . '/' . $data . '"';

        if($class!= null){
            $html .= 'class="';
            $html .= $class;
            $html .= '"';
            }   

        if ($target != null) {
            $html .= ' target=" '. $target . '"';
        }

        $html .= '>' . $name . '</a>';

        return $html;
    }
}

