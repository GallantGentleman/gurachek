<?php

namespace app\controllers;


class ListController extends \riki\core\Controller {

    function __construct() {
        $this->view = new \riki\core\View();
    }

    function actionIndex() {
        $this->view->generateView('template', 'list');
        echo "Hallo";
    }

}