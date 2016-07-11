<?php

namespace riki\core;

use PDO;
use PDOException;

abstract class Model {

    public $db;

    function __construct() {
        try {
          $this->db = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");
        } catch(PDOException $e) {
          // log($e->getMessage());
        }
    }

    abstract function getData();

}
