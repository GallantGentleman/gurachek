<?php

namespace riki\core;

use app\controllers;

use \riki\core\System;

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

        echo "asdsa" . $GLOBALS['system_cook']->getCook("first");

        if(!isset($cook)) {
            $template = 'login';
            $content = 'choose';
            $title = 'Welcome to';
        }

        $title = $title . $score . ' People Projects Manager';

        include 'app/views/templates/default/' . $template . '.php';

    }
}
