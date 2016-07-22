<?php
session_start();

define("SITE_NAME", 'http://localhost/pets/pp/');

echo $_COOKIE['auth'];
echo "<br>";
echo $_COOKIE['first_visit'];

use \riki\core;
use \app\controllers;
use \riki\config;

include "vendor/riki/core/Loader.php";
include "vendor/riki/core/Router.php";

function autoload($className) {
    Loader::autoload($className);
}

spl_autoload_register('autoload');

$router = new \riki\core\Router();
$router->start();

?>
