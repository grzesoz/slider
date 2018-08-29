<?php
namespace app\lib\files;

class Files{
    
    private $target_dir = "public/uploads/";
    private $target_file;
    private $key;
    private $fileInfo;
    
    public function __construct($files=null){
        $this->fileInfo = $files;
    }
    
    public function uploadImage(){
            $this->key = key($this->fileInfo); 
            $this->target_file= $this->target_dir . basename($this->fileInfo[$this->key]["name"]);
        
            $type = explode("/", $this->fileInfo[$this->key]['type']);
            
            if($type[0] == "image") {
                if(file_exists($this->target_dir.$this->fileInfo[$this->key]["name"])){
                    return 0;
                }
                elseif(move_uploaded_file($this->fileInfo[$this->key]['tmp_name'], $this->target_file)){
                    return 1;
                }else{
                    return 0;
                 }
            }else{
                return 0;
            }
    }
    
    public function deleteFile($filename){
        unlink($this->target_dir.$filename);
    }
    

}