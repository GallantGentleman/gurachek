<?php

namespace app\models;

class ProjectsListModel extends \riki\core\Model {

  public function getData() {

      $data = null;

      if($this->isDB == true) {

        $stmt = $this->db->query('SELECT * FROM projects');

        while($row = $stmt->fetch()) {
          $data[] = $row;
        }
      }

      return $data;
  }

}

 ?>
