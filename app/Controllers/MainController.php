<?php

namespace app\controllers;

use \riki\core\System;

class MainController extends \riki\core\Controller {

    function __construct() {
        $this->model = new \app\models\ProjectsListModel();
        $this->view = new \riki\core\View();
    }

    function actionIndex() {

        if(isset($_GET['active'])) {
          $GLOBAL['system_cook']->setCook("first", "1");
        }

        $template = 'template';
        $content = 'index';
        $title = 'People Projects Manager';
        $model = $this->model->getData();

        /**
        if(isset($_SESSION['auth']))  {
          $template  = 'login';
          $content = 'sign_in';
          $title = 'Sign in / Sign up';
        }
        **/

        $this->view->generateView($template, $content, $title, $model);
    }

}
