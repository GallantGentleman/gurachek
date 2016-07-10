<?php

  $id = 2;

  $model = new PDO("mysql:host=localhost;dbname=pp-manager", "root", "");

  $stmt = $model->prepare('SELECT * FROM projects WHERE id = ?');
  $stmt->execute(array($id));

  while($row = $stmt->fetch()) {

      echo "<pre>";
      print_r($row);
      echo "</pre>";

  }


?>
