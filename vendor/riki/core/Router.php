<?php

namespace riki\core;

use \app\controllers;

class Router {

    private $namespace = "app\\controllers\\";

    public function start()
    {

        $controller = 'Main';
        $action = 'index';

        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri);
        $uri = htmlspecialchars($uri);
        $uri = strip_tags($uri);

        $arr = explode('/', $uri);

        if ((!empty($arr[1])) && (isset($arr[1]))) {
            $controller = $this->namespace . ucfirst($arr[1]);

            if ((!empty($arr[2])) && (isset($arr[2]))) {
                $action = $arr[2];
            }

        }

        $controller =  $controller . 'Controller';
        $action = 'action' . ucfirst($action);

        if (!class_exists($controller)) $controller = $this->namespace . 'MainController';

        $controller_obj = new $controller();

        if(!method_exists($controller_obj, $action)) $action = 'actionIndex';

        $controller_obj->$action();

    }

}