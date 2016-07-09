<?php

namespace app\controllers;


class MainController extends \riki\core\Controller {

    function __construct() {
        $this->view = new \riki\core\View();
    }

    function actionIndex() {
        $this->view->generateView('template', 'index');
    }

}