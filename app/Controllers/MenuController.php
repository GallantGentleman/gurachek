<?php

namespace app\controllers;


class MenuController extends \riki\core\Controller {

    public $content;

    function __construct() {
        $this->view = new \riki\core\View();
    }

    function actionIndex() {
        $this->view->generateView('template', $this->content);
        echo "Hallo";
    }

    function actionAuth() {
        $this->content = 'auth';
        $this->actionIndex();
    }

    function actionReg() {
        $this->content = 'reg';
        $this->actionIndex();
    }

    function actionFb() {
        $this->content = 'fb';
        $this->actionIndex();
    }

}