<?php

namespace app\models;

use ErrorException;
use PDOException;
use \riki\core\System;

class ProjectsListModel extends \riki\core\Model {

  public function getData() {

    $data = null;

      try {
        $stmt = $this->db->query('SELECT * FROM projects');
      } catch(PDOException $e) {
        System::log($e->getMessage());
      };

      try {
        while($row = $stmt->fetch()) {
          $data[] = $row;
        }
      } catch(PDOException $e) {
        System::log($e->getMessage());
      };

      return $data;
  }

}

 ?>
