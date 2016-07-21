<?php

namespace app\controllers;

use \riki\core\Controller;
use \riki\core\View;

class UserController extends Controller {

    public function __construct() {
        $this->view = new View;
    }

    public function actionIndex() {
        $this->view->generateView('login', 'choose', 'Welcome');
    }

    public function actionSign_in() {
        $this->view->generateView('login', 'sign_in', 'Sign in');
    }

    public function actionSign_up() {
        $this->view->generateView('login', 'sign_up', 'Sign up');
    }
}
