<?php

namespace app\controllers;

class MainController extends \riki\core\Controller {

    function __construct() {
        $this->model = new \app\models\ProjectsListModel();
        $this->view = new \riki\core\View();
    }

    function actionIndex() {
        $this->view->generateView('template', 'index', $this->model->getData());
    }

}
