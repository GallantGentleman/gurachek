<?php

namespace app\controllers;

use \riki\core\Controller;
use \riki\lib\Common;

class ProjectController extends Controller {

    public function actionIndex() {
      echo Common::e($_GET['id']);
    }

}
