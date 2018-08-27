<?php

require_once 'app/init.php';

use lib\view\Widok;
use lib\config\Configs;
use models\entity\Base;

$conf = new Configs\config;
$ConfigurationDB = $conf ->getConfigurationDB();

$db = new Base\db('slider','localhost','root','');

$view = new Widok\view($conf ->getConfigurationPage());
$data = [];

//echo"<pre>";
//var_dump($_SERVER);
//echo"</pre>";

try {
    
    $data['title']="Dodaj obraz";
    $view->display('addPicture', $data, 'main', 'main');
    
    
} catch (Exception $e) {
    echo 'Wyjątek: ',  $e->getMessage(), "\n";
}

