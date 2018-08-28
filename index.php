<?php

require_once 'app/init.php';

use app\core;

//echo"<pre>";
//var_dump($_SERVER);
//echo"</pre>";

try {
$app = new core\App();
$app->render();
} catch (Exception $e) {
    echo 'Wyjątek: ',  $e->getMessage(), "\n";
}

