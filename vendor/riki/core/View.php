<?php

namespace riki\core;

use app\controllers;

class View {

    public function generateView($template, $content, $title = '', $data = null) {

        $score = '';

        if($data != null) {
            if(is_array($data)) {
                extract($data);
            }
        }

        if(!empty($title)) {
          $score = ' -';
        }

        if(!isset($_SESSION['first_visit'])) {
            $template = 'login';
            $content = 'choose';
            $title = 'Welcome to';
        }

        $title = $title . $score . ' People Projects Manager';

        include 'app/views/templates/default/' . $template . '.php';

    }
}
