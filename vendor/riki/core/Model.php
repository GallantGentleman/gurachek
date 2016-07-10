<?php

namespace riki\core;

abstract class Model {

    private $model;

    function __construct() {
        $this->model = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");
    }

    abstract function getData();

}
