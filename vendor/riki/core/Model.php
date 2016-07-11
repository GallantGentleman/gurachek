<?php

namespace riki\core;

use PDO;
use PDOException;

abstract class Model {

    public $db;
    public $idBD = true;

    function __construct() {
        try {
          $this->db = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");
        } catch(PDOException $e) {
          $this->isDB = false;
        }
    }

    abstract function getData();

}
