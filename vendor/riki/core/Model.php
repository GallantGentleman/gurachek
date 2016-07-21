<?php

namespace riki\core;

use PDO;
use PDOException;
use \riki\core\System;

abstract class Model {

    public $db;

    function __construct() {
        try {
          $this->db = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");
        } catch(PDOException $e) {
          System::log($e->getMessage());
        }
    }

    abstract function getData();

}
