<?php

namespace riki\core;

use PDO;

abstract class Model {

    public $db;

    function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");
    }

    abstract function getData();

}
