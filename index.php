<?php
session_start();

define("SITE_NAME", 'http://localhost/pets/pp/');

use \riki\core;
use \app\controllers;
use \riki\config;
use \riki\core\System;

include "vendor/riki/core/Loader.php";
include "vendor/riki/core/Router.php";

function autoload($className) {
    Loader::autoload($className);
}

spl_autoload_register('autoload');

$GLOBALS['system_cook'] = new System();

$router = new \riki\core\Router();
$router->start();

?>
