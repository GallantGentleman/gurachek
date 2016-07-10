<?php

namespace app\models;

class ProjectsListModel extends \riki\core\Model {

  public function getData() {
      $stmt = $this->db->prepare('SELECT * FROM projects');
      $stmt->execute();

      while($row = $stmt->fetch()) {
        $data[] = $row;
      }

      return $data;
  }

}

 ?>
