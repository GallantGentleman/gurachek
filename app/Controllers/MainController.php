<?php

namespace app\controllers;

class MainController extends \riki\core\Controller {

    function __construct() {
        $this->model = new \app\models\ProjectsListModel();
        $this->view = new \riki\core\View();
    }

    function actionIndex() {

        $tmp = 'template';
        $page = 'index';
        $model = $this->model->getData();

        if(isset($_SESSION['auth']))  {
          $tmp  = 'login';
          $page = 'auth';
        }

        $this->view->generateView($tmp, $page, $model);
    }

}
