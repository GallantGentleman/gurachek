<?php

namespace app\controllers;

use \riki\core\Controller;
use \riki\core\View;

use \riki\lib\SignUp;

class UserController extends Controller {

    public function __construct() {
        $this->view = new View;
    }

    public function actionIndex() {
        $this->view->generateView('login', 'choose', 'Welcome');
    }

    public function actionSign_in() {
        $this->view->generateView('login', 'sign_in', 'Sign In');
    }

    public function actionSign_up() {
        $signup = new SignUp();
        $signup->regUser();

        $this->view->generateView('login', 'sign_up', 'Sign Up');
    }

    public function actionAccount() {
      if(isset($_GET['id'])) {
        echo $_GET['id'];
      }

      $this->view->generateView('template', 'account', 'My Profile');
    }
}
