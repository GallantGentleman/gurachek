<?php

namespace app\models;

use ErrorException;
use \riki\core\System;

class ProjectsListModel extends \riki\core\Model {

  public function getData() {

    $data = null;

      try {
        $stmt = $this->db->query('SELECT * FROM projects');
      } catch(PDOException $e) {
        System::log($e);
      };

        try {
        while($row = $stmt->fetch()) {
          $data[] = $row;
        }
      } catch(ErrorException $e) {
        System::log($e);
      };

      return $data;
  }

}

 ?>
