<?php

namespace app\lib\post;

class Post
{
    private $post;

    public function __construct()
    {
        $this->post = $_POST;
    }
    
    public function __get($name)
    {  
        return $this->post[$name];
    }
    
    public function check()
    {  
        return count($this->post);
    }
}