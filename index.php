<?php

require_once 'app/init.php';

use app\core;
use app\controller;

//echo"<pre>";
//var_dump($_SERVER);
//echo"</pre>";

try {
    $app = new core\App();
    $app->render();
} catch (Exception $e) {
    $app = new controller\Error(500,'Taka strona nie istnieje');
    $app -> showError();
}

