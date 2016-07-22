<?php

namespace app\controllers;

use \riki\core\Controller;
use \riki\core\View;

use \riki\lib\SignUp;
use \riki\lib\Common;
use \riki\core\System;

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

        if($signup->success) {

          $name = $signup->name;

          echo "Name - " . $name;

          $GLOBALS['system_cook']->setCook("auth", $name);

          echo "<br>Cookie - " . $GLOBALS['system_cook']->getCook("auth");

          echo Common::e("Succes! Welcome, " . $signup->name . ".");
          echo Common::linkTo(SITE_NAME);

        } else
          //echo Common::e("Дела идут [X * (Y - E) = ВО] !");

        $this->view->generateView('login', 'sign_up', 'Sign Up');
    }

    public function actionAccount() {
      if(isset($_GET['id'])) {
        echo $_GET['id'];
      }

      $this->view->generateView('template', 'account', 'My Profile');
    }
}
