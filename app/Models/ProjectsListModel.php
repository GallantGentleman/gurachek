<?php

namespace app\models;

use ErrorException;

class ProjectsListModel extends \riki\core\Model {

  public function getData() {

    $data = null;

      try {
        $stmt = $this->db->query('SELECT * FROM projects');
      } catch(PDOException $e) {
        echo "Не могу !";
      };

        try {
        while($row = $stmt->fetch()) {
          $data[] = $row;
        }
      } catch(ErrorException $e) {
        echo "BLYAT`";
      };

      return $data;
  }

}

 ?>
