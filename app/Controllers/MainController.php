<?php

namespace app\controllers;

class MainController extends \riki\core\Controller {

    function __construct() {
        $this->model = new \app\models\ProjectsListModel();
        $this->view = new \riki\core\View();
    }

    function actionIndex() {

        if(isset($_GET['active'])) {
          $_SESSION['first_visit'] = true;
        }

        if(isset($_GET['rm'])) {
          unset($_SESSION['first_visit']);
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
